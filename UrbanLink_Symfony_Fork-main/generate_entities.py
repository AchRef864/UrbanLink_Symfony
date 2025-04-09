import os
import mysql.connector
import re
import time
from datetime import datetime

# Database connection settings
DB_HOST = "mysql-1490d387-achref-urbanlink.j.aivencloud.com"
DB_PORT = 23048
DB_USER = "avnadmin"
DB_PASSWORD = "AVNS_aYEcJsYCG52lJEkN-su"
DB_NAME = "defaultdb"
SSL_CERT = "C:/Users/skonb/Desktop/ca.pem" 

# Entity output directory
ENTITY_DIR = "src/Entity"

# Helper function to convert snake_case to PascalCase
def to_pascal_case(snake_str):
    components = snake_str.split('_')
    return ''.join(x.title() for x in components)

# Helper function to convert snake_case to camelCase
def to_camel_case(snake_str):
    components = snake_str.split('_')
    return components[0] + ''.join(x.title() for x in components[1:])

# Helper function to map MySQL types to PHP/Doctrine types
def map_db_type_to_doctrine(db_type, is_nullable):
    # Extract base type and size if applicable
    match = re.match(r'(\w+)(?:\((\d+)\))?', db_type)
    if not match:
        return "string", ""
    
    base_type = match.group(1).lower()
    size = match.group(2)
    
    type_mapping = {
        'int': ('integer', ''),
        'bigint': ('bigint', ''),
        'tinyint': ('boolean' if size == '1' else 'smallint', ''),
        'smallint': ('smallint', ''),
        'mediumint': ('integer', ''),
        'varchar': ('string', f'length={size}'),
        'char': ('string', f'length={size}'),
        'text': ('text', ''),
        'mediumtext': ('text', ''),
        'longtext': ('text', ''),
        'decimal': ('decimal', f'precision={size.split(",")[0] if "," in size else size}, scale={size.split(",")[1] if "," in size else 0}' if size else ''),
        'float': ('float', ''),
        'double': ('float', ''),
        'datetime': ('datetime', ''),
        'date': ('date', ''),
        'time': ('time', ''),
        'timestamp': ('datetime', ''),
        'enum': ('string', ''),
        'set': ('array', ''),
        'json': ('json', ''),
        'blob': ('blob', ''),
    }
    
    doctrine_type, options = type_mapping.get(base_type, ('string', ''))
    
    # Add nullable option if applicable
    if is_nullable == 'YES':
        if options:
            options += ', '
        options += 'nullable=true'
    
    return doctrine_type, options

# Function to create entity file
def create_entity_file(table_name, columns, primary_keys):
    class_name = to_pascal_case(table_name)
    entity_file_path = os.path.join(ENTITY_DIR, f"{class_name}.php")
    
    # Create directory if it doesn't exist
    os.makedirs(ENTITY_DIR, exist_ok=True)
    
    with open(entity_file_path, 'w') as f:
        # Write file header
        f.write(f"""<?php

namespace App\\Entity;

use App\\Repository\\{class_name}Repository;
use Doctrine\\ORM\\Mapping as ORM;

/**
 * @ORM\\Entity(repositoryClass={class_name}Repository::class)
 * @ORM\\Table(name="{table_name}")
 */
class {class_name}
{{
""")
        
        # Write properties and annotations
        for column in columns:
            column_name = column['Field']
            column_type = column['Type']
            is_nullable = column['Null']
            property_name = to_camel_case(column_name)
            
            doctrine_type, options = map_db_type_to_doctrine(column_type, is_nullable)
            
            f.write(f"""    /**
     * @ORM\\{'' if column_name in primary_keys else 'Column'}({'' if column_name in primary_keys else f'type="{doctrine_type}", {options}'})
     */
    private ${property_name};

""")
        
        # Write getters and setters
        for column in columns:
            column_name = column['Field']
            property_name = to_camel_case(column_name)
            method_name = to_pascal_case(column_name)
            
            doctrine_type, _ = map_db_type_to_doctrine(column['Type'], column['Null'])
            php_type = {
                'integer': 'int',
                'smallint': 'int',
                'bigint': 'int',
                'boolean': 'bool',
                'float': 'float',
                'string': 'string',
                'text': 'string',
                'datetime': '\\DateTimeInterface',
                'date': '\\DateTimeInterface',
                'time': '\\DateTimeInterface',
                'array': 'array',
                'json': 'array',
                'blob': 'resource'
            }.get(doctrine_type, 'string')
            
            nullable = 'null|' if column['Null'] == 'YES' else ''
            
            # Getter
            f.write(f"""    public function get{method_name}(): ?{php_type}
    {{
        return $this->{property_name};
    }}

""")
            
            # Setter
            f.write(f"""    public function set{method_name}({nullable}{php_type} ${property_name}): self
    {{
        $this->{property_name} = ${property_name};

        return $this;
    }}

""")
        
        # Close class
        f.write("}\n")
    
    print(f"Entity created for table: {table_name} -> {entity_file_path}")
    
    # Create repository class
    create_repository_file(class_name)

# Function to create repository file
def create_repository_file(class_name):
    repo_dir = "src/Repository"
    os.makedirs(repo_dir, exist_ok=True)
    
    repo_file_path = os.path.join(repo_dir, f"{class_name}Repository.php")
    
    with open(repo_file_path, 'w') as f:
        f.write(f"""<?php

namespace App\\Repository;

use App\\Entity\\{class_name};
use Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepository;
use Doctrine\\Persistence\\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<{class_name}>
 */
class {class_name}Repository extends ServiceEntityRepository
{{
    public function __construct(ManagerRegistry $registry)
    {{
        parent::__construct($registry, {class_name}::class);
    }}

    public function add({class_name} $entity, bool $flush = false): void
    {{
        $this->getEntityManager()->persist($entity);

        if ($flush) {{
            $this->getEntityManager()->flush();
        }}
    }}

    public function remove({class_name} $entity, bool $flush = false): void
    {{
        $this->getEntityManager()->remove($entity);

        if ($flush) {{
            $this->getEntityManager()->flush();
        }}
    }}
}}
""")
    
    print(f"Repository created: {repo_file_path}")

# Connect to the database and generate entities
try:
    conn = mysql.connector.connect(
        host=DB_HOST,
        port=DB_PORT,
        user=DB_USER,
        password=DB_PASSWORD,
        database=DB_NAME,
        ssl_ca=SSL_CERT
    )
    cursor = conn.cursor(dictionary=True)
    
    # Fetch all table names
    cursor.execute("SHOW TABLES")
    all_tables = [table[list(table.keys())[0]] for table in cursor.fetchall()]
    tables = [table for table in all_tables if table not in ['doctrine_migration_versions', 'messenger_messages']]

    if not tables:
        print("No tables found in the database.")
    else:
        print(f"Found {len(tables)} tables: {', '.join(tables)}")

        # Generate entity files for each table
        for table in tables:
            # Get table columns
            cursor.execute(f"DESCRIBE {table}")
            columns = cursor.fetchall()
            
            # Get primary keys
            cursor.execute(f"SHOW KEYS FROM {table} WHERE Key_name = 'PRIMARY'")
            primary_keys = [key['Column_name'] for key in cursor.fetchall()]
            
            # Create entity file
            create_entity_file(table, columns, primary_keys)

    # Close the connection
    cursor.close()
    conn.close()
    

except mysql.connector.Error as e:
    print(f"Error: {e}")


def wait_for_entity_creation(directory, timeout=60, check_interval=5):
    """
    This method waits for files to be created in the specified directory.
    It checks periodically and executes the given command once files are detected.
    
    Args:
    - directory (str): The directory to monitor for file creation.
    - timeout (int): The maximum time (in seconds) to wait before giving up.
    - check_interval (int): The time (in seconds) to wait between checks.
    """
    start_time = time.time()
    
    while time.time() - start_time < timeout:
        # Check if the directory contains files
        if os.listdir(directory):
            print(f"Files found in {directory}, executing command.")
            # Run the desired command
            command = f"php bin/console make:entity --regenerate src"
            os.system(command)
            break
        else:
            print(f"No files found in {directory}, checking again in {check_interval} seconds...")
            time.sleep(check_interval)
    
    # If timeout reached, print a message
    if time.time() - start_time >= timeout:
        print(f"Timeout reached: No files found in {directory} within the given time.")

wait_for_entity_creation("src/Entity", timeout=600, check_interval=5)