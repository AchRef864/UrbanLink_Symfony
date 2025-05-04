
---

````markdown
# 🚖 UrbanLink Symfony Project

UrbanLink is a Symfony-based web platform for managing urban transportation services such as taxi bookings, user subscriptions, and vehicle routing. It is designed with modern backend and frontend technologies, providing a scalable and flexible architecture for future enhancements.

---

## 📌 Key Features

- 🧑‍💼 User Authentication & Roles
- 🚖 Taxi Management & Reservation System
- 💳 Subscription Plans (`abonnement`)
- 🗺️ Trip and Route Management (`trajet`)
- ⭐ Customer Reviews (`avis`)
- 🚗 Vehicle CRUD Operations
- 🐳 Docker & Docker Compose Setup
- 🎨 Tailwind CSS Frontend Styling
- 🧪 PHPUnit Testing

---

## ⚙️ Tech Stack

| Layer       | Technology               |
|-------------|--------------------------|
| Backend     | PHP 8+, Symfony 6.x      |
| Frontend    | Twig, Tailwind CSS, JS   |
| Database    | MySQL / PostgreSQL       |
| Dev Tools   | Composer, Webpack Encore |
| Testing     | PHPUnit                  |
| Container   | Docker + docker-compose  |

---

## 🛠 Installation Guide

### 🧾 Requirements

- PHP >= 8.1
- Composer
- Symfony CLI
- Node.js + Yarn
- MySQL or PostgreSQL
- Docker (optional)

### 🔧 Step-by-Step Setup

1. **Clone the repository**

```bash
git clone https://github.com/AchRef864/UrbanLink_Symfony.git
cd UrbanLink_Symfony
````

2. **Environment Setup**

```bash
cp .env .env.local
# Edit DB credentials in .env.local
```

3. **Install PHP and JS dependencies**

```bash
composer install
yarn install
yarn dev   # or yarn watch for live reload
```

4. **Database Migration**

```bash
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
```

5. **Run Symfony Local Server**

```bash
symfony server:start
```

Or via Docker:

```bash
docker-compose up --build
```

---

## 🧪 Running Tests

```bash
php bin/phpunit
```

---

## 📁 Folder Structure

```
UrbanLink_Symfony/
├── assets/              # Tailwind CSS, JS
├── config/              # Symfony config
├── docker/              # Docker configs
├── migrations/          # Doctrine migrations
├── public/              # Public web root
├── src/                 # PHP code: controllers, entities, services
├── templates/           # Twig frontend
├── tests/               # PHPUnit tests
├── translations/        # i18n support
├── .env, .gitignore     # Environment configs
├── composer.json        # PHP dependencies
├── webpack.config.js    # Webpack Encore
└── docker-compose.yaml  # Docker stack
```


```
---

## 📬 Authors

Achref Rahali : 
MOhamed Sbissi : 
Malek Med Hammami : 
Heni Ridene :
Skander Bardaoui :
Mariem Hamouda : 

---
```
