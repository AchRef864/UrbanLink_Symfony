<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* utils/_vModal.html.twig */
class __TwigTemplate_9e5afe2b7b85a46ea2c352f6872dd04c extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utils/_vModal.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utils/_vModal.html.twig"));

        // line 2
        yield "<div id=\"simpleModal\" class=\"modal hidden\">
    <div class=\"modal-content bg-white mx-auto my-8 p-6 rounded-lg shadow-xl max-w-lg text-left relative overflow-hidden\">
        <!-- Header with gradient background -->
        <span class=\"close-button absolute top-4 right-4 text-2xl font-bold cursor-pointer text-blue-500 z-10\">&times;</span>

        <form action=\"";
        // line 7
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicle_create");
        yield "\" method=\"POST\" enctype=\"multipart/form-data\" class=\"mt-8\">
            <!-- Vehicle Type Dropdown -->
            <div class=\"mb-5\">
                <label class=\"block text-sm font-medium text-gray-700 mb-1\">Vehicle Type</label>
                <select name=\"type\" class=\"w-full p-3 border border-gray-300 rounded-lg bg-gray-50 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200\" required>
                    <option value=\"\" disabled selected>Select vehicle type</option>
                    <option value=\"car\">Car</option>
                    <option value=\"motorbike\">Motorbike</option>
                    <option value=\"suv\">SUV</option>
                    <option value=\"van\">Van</option>
                    <option value=\"minibus\">Minibus</option>
                    <option value=\"bus\">Bus</option>
                </select>
            </div>

            <!-- Model & Brand Side by Side -->
            <div class=\"mb-5 flex space-x-4\">
                <div class=\"w-1/2\">
                    <label class=\"block text-sm font-medium text-gray-700 mb-1\">Model</label>
                    <input type=\"text\" name=\"model\" placeholder=\"e.g. Civic\" class=\"w-full p-3 border border-gray-300 rounded-lg bg-gray-50 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200\" required>
                </div>
                <div class=\"w-1/2\">
                    <label class=\"block text-sm font-medium text-gray-700 mb-1\">Brand</label>
                    <input type=\"text\" name=\"brand\" placeholder=\"e.g. Honda\" class=\"w-full p-3 border border-gray-300 rounded-lg bg-gray-50 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200\" required>
                </div>
            </div>

            <!-- License Plate -->
            <div class=\"mb-5\">
                <label class=\"block text-sm font-medium text-gray-700 mb-1\">License Plate</label>
                <div class=\"flex items-center space-x-2 p-2 bg-gray-50 rounded-lg border border-gray-300\">
                    <input type=\"text\" name=\"licensePlate1\" placeholder=\"123\" class=\"w-1/2 p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200 text-center font-medium\" maxlength=\"3\" required>
                    <span class=\"px-2 py-1 bg-gray-200 rounded-md font-bold text-gray-700\">تونس</span>
                    <input type=\"text\" name=\"licensePlate2\" placeholder=\"4567\" class=\"w-1/2 p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200 text-center font-medium\" maxlength=\"4\" required>
                </div>
            </div>

            <!-- Seats with better range styling -->
            <div class=\"mb-5\">
                <label class=\"block text-sm font-medium text-gray-700 mb-1\">Number of Seats</label>
                <div class=\"flex items-center space-x-4\">
                    <input type=\"range\" name=\"seats\" min=\"1\" max=\"100\" value=\"4\" class=\"w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer accent-blue-500\" required>
                    <span id=\"seatsValue\" class=\"bg-blue-500 text-white w-8 h-8 flex items-center justify-center rounded-full font-medium text-sm\">4</span>
                </div>
            </div>

            <!-- Image Upload with preview -->
            <div class=\"mb-5\">
                <label class=\"block text-sm font-medium text-gray-700 mb-1\">Vehicle Image</label>
                <div class=\"flex items-center justify-center w-full\">
                    <label class=\"flex flex-col items-center justify-center w-full h-32 border-2 border-dashed border-gray-300 rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100 transition duration-200\">
                        <div class=\"flex flex-col items-center justify-center pt-5 pb-6\">
                            <svg class=\"w-8 h-8 mb-2 text-gray-500\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12\"></path>
                            </svg>
                            <p class=\"mb-1 text-sm text-gray-500\"><span class=\"font-medium\">Click to upload</span> or drag and drop</p>
                            <p class=\"text-xs text-gray-500\">PNG, JPG, GIF up to 10MB</p>
                        </div>
                        <input type=\"file\" name=\"image\" accept=\"image/*\" class=\"hidden\" required>
                    </label>
                </div>
                <div id=\"imagePreview\" class=\"mt-2 hidden\">
                    <img src=\"\" alt=\"Vehicle preview\" class=\"h-20 rounded-lg\">
                </div>
            </div>

            <!-- Color Picker with live preview -->
            <div class=\"mb-5\">
                <label class=\"block text-sm font-medium text-gray-700 mb-1\">Vehicle Color</label>
                <div class=\"flex items-center space-x-3\">
                    <input type=\"color\" name=\"color\" value=\"#3B82F6\" class=\"w-12 h-12 p-1 border border-gray-300 rounded-lg cursor-pointer\" required>
                    <div class=\"flex-1 h-10 rounded-lg border border-gray-300\" id=\"colorPreview\" style=\"background-color: #3B82F6;\"></div>
                </div>
            </div>

            <!-- Year with better number input -->
            <div class=\"mb-5\">
                <label class=\"block text-sm font-medium text-gray-700 mb-1\">Year of Manufacture</label>
                <div class=\"relative\">
                    <div class=\"absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none\">
                        
                    </div>
                    <input type=\"number\" name=\"year\" placeholder=\"e.g. 2023\" min=\"1900\" max=\"2100\" class=\"w-full p-3 pl-10 border border-gray-300 rounded-lg bg-gray-50 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200\" required>
                </div>
            </div>

            <!-- Air Conditioning toggle switch -->
            <div class=\"mb-5 flex items-center justify-between\">
                <label class=\"text-sm font-medium text-gray-700\">Air Conditioning</label>
                <label class=\"relative inline-flex items-center cursor-pointer\">
                    <input type=\"checkbox\" name=\"airConditioning\" class=\"sr-only peer\">
                    <div class=\"w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-500\"></div>
                </label>
            </div>

            <!-- Submit Button -->
            <div class=\"flex justify-end mt-6\">
                <button type=\"button\" class=\"mr-2 px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition duration-200\">Cancel</button>
                <button type=\"submit\" class=\"px-6 py-2 bg-blue-500 text-white font-medium rounded-lg hover:from-blue-600 hover:to-indigo-700 focus:ring-4 focus:ring-blue-300 focus:outline-none transition duration-200\">Add Vehicle</button>
            </div>
        </form>
    </div>
</div>

";
        // line 112
        yield "<style>
    input::placeholder {
        color: #9ca3af; /* Tailwind gray-400 */
    }

    .modal {
        display: none; 
        position: fixed; 
        z-index: 50; 
        left: 0;
        top: 0;
        width: 100%; 
        height: 100%;
        background-color: rgba(0,0,0,0.5);
        overflow-y: auto;
        backdrop-filter: blur(3px);
        transition: all 0.3s ease;
    }

    .modal-content {
        background-color: #fefefe;
        margin: 1% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 90%; 
        max-width: 600px;
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        text-align: left;
        transform: scale(0.95);
        animation: modalopen 0.3s ease forwards;
    }

    @keyframes modalopen {
        from {
            opacity: 0;
            transform: scale(0.95);
        }
        to {
            opacity: 1;
            transform: scale(1);
        }
    }

    .close-button {
        float: right;
        font-size: 28px;
        font-weight: bold;
        cursor: pointer;
        transition: color 0.2s ease;
    }

    .close-button:hover,
    .close-button:focus {
        color: rgba(42, 41, 63, 0.8);
        text-decoration: none;
        cursor: pointer;
    }

    /* Custom range slider */
    input[type=range]::-webkit-slider-thumb {
        -webkit-appearance: none;
        appearance: none;
        width: 18px;
        height: 18px;
        border-radius: 50%;
        background: #3B82F6;
        cursor: pointer;
        border: 2px solid white;
        box-shadow: 0 1px 3px rgba(0,0,0,0.3);
    }

    input[type=range]::-moz-range-thumb {
        width: 18px;
        height: 18px;
        border-radius: 50%;
        background: #3B82F6;
        cursor: pointer;
        border: 2px solid white;
        box-shadow: 0 1px 3px rgba(0,0,0,0.3);
    }

    /* For Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }
    /* For Chrome */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
</style>

";
        // line 206
        yield "<script>
    // Get the modal
    var modal = document.getElementById(\"simpleModal\");

    // Get the button that opens the modal
    var btn = document.getElementById(\"openModal\");

    // Get the <span> element that closes the modal
    var closeBtn = document.getElementsByClassName(\"close-button\")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
        modal.style.display = \"block\";
        document.body.style.overflow = \"hidden\"; // Prevent scrolling behind modal
    }

    // When the user clicks on <span> (x), close the modal
    closeBtn.onclick = function() {
        modal.style.display = \"none\";
        document.body.style.overflow = \"auto\"; // Re-enable scrolling
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = \"none\";
            document.body.style.overflow = \"auto\"; // Re-enable scrolling
        }
    }

    // Handle seats slider
    const seatsSlider = document.querySelector('input[name=\"seats\"]');
    const seatsValue = document.getElementById('seatsValue');
    seatsSlider.addEventListener('input', function() {
        seatsValue.textContent = this.value;
    });

    // Handle image preview
    const imageInput = document.querySelector('input[name=\"image\"]');
    const imagePreview = document.getElementById('imagePreview');
    
    imageInput.addEventListener('change', function() {
        if (this.files && this.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                imagePreview.querySelector('img').src = e.target.result;
                imagePreview.classList.remove('hidden');
            }
            reader.readAsDataURL(this.files[0]);
        }
    });

    // Handle color preview
    const colorPicker = document.querySelector('input[name=\"color\"]');
    const colorPreview = document.getElementById('colorPreview');
    
    colorPicker.addEventListener('input', function() {
        colorPreview.style.backgroundColor = this.value;
    });

    // Set the current year as max value for the year input
    document.querySelector('input[name=\"year\"]').max = new Date().getFullYear() + 1;
</script>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "utils/_vModal.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  257 => 206,  162 => 112,  55 => 7,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/modal.html.twig #}
<div id=\"simpleModal\" class=\"modal hidden\">
    <div class=\"modal-content bg-white mx-auto my-8 p-6 rounded-lg shadow-xl max-w-lg text-left relative overflow-hidden\">
        <!-- Header with gradient background -->
        <span class=\"close-button absolute top-4 right-4 text-2xl font-bold cursor-pointer text-blue-500 z-10\">&times;</span>

        <form action=\"{{ path('app_vehicle_create') }}\" method=\"POST\" enctype=\"multipart/form-data\" class=\"mt-8\">
            <!-- Vehicle Type Dropdown -->
            <div class=\"mb-5\">
                <label class=\"block text-sm font-medium text-gray-700 mb-1\">Vehicle Type</label>
                <select name=\"type\" class=\"w-full p-3 border border-gray-300 rounded-lg bg-gray-50 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200\" required>
                    <option value=\"\" disabled selected>Select vehicle type</option>
                    <option value=\"car\">Car</option>
                    <option value=\"motorbike\">Motorbike</option>
                    <option value=\"suv\">SUV</option>
                    <option value=\"van\">Van</option>
                    <option value=\"minibus\">Minibus</option>
                    <option value=\"bus\">Bus</option>
                </select>
            </div>

            <!-- Model & Brand Side by Side -->
            <div class=\"mb-5 flex space-x-4\">
                <div class=\"w-1/2\">
                    <label class=\"block text-sm font-medium text-gray-700 mb-1\">Model</label>
                    <input type=\"text\" name=\"model\" placeholder=\"e.g. Civic\" class=\"w-full p-3 border border-gray-300 rounded-lg bg-gray-50 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200\" required>
                </div>
                <div class=\"w-1/2\">
                    <label class=\"block text-sm font-medium text-gray-700 mb-1\">Brand</label>
                    <input type=\"text\" name=\"brand\" placeholder=\"e.g. Honda\" class=\"w-full p-3 border border-gray-300 rounded-lg bg-gray-50 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200\" required>
                </div>
            </div>

            <!-- License Plate -->
            <div class=\"mb-5\">
                <label class=\"block text-sm font-medium text-gray-700 mb-1\">License Plate</label>
                <div class=\"flex items-center space-x-2 p-2 bg-gray-50 rounded-lg border border-gray-300\">
                    <input type=\"text\" name=\"licensePlate1\" placeholder=\"123\" class=\"w-1/2 p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200 text-center font-medium\" maxlength=\"3\" required>
                    <span class=\"px-2 py-1 bg-gray-200 rounded-md font-bold text-gray-700\">تونس</span>
                    <input type=\"text\" name=\"licensePlate2\" placeholder=\"4567\" class=\"w-1/2 p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200 text-center font-medium\" maxlength=\"4\" required>
                </div>
            </div>

            <!-- Seats with better range styling -->
            <div class=\"mb-5\">
                <label class=\"block text-sm font-medium text-gray-700 mb-1\">Number of Seats</label>
                <div class=\"flex items-center space-x-4\">
                    <input type=\"range\" name=\"seats\" min=\"1\" max=\"100\" value=\"4\" class=\"w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer accent-blue-500\" required>
                    <span id=\"seatsValue\" class=\"bg-blue-500 text-white w-8 h-8 flex items-center justify-center rounded-full font-medium text-sm\">4</span>
                </div>
            </div>

            <!-- Image Upload with preview -->
            <div class=\"mb-5\">
                <label class=\"block text-sm font-medium text-gray-700 mb-1\">Vehicle Image</label>
                <div class=\"flex items-center justify-center w-full\">
                    <label class=\"flex flex-col items-center justify-center w-full h-32 border-2 border-dashed border-gray-300 rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100 transition duration-200\">
                        <div class=\"flex flex-col items-center justify-center pt-5 pb-6\">
                            <svg class=\"w-8 h-8 mb-2 text-gray-500\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12\"></path>
                            </svg>
                            <p class=\"mb-1 text-sm text-gray-500\"><span class=\"font-medium\">Click to upload</span> or drag and drop</p>
                            <p class=\"text-xs text-gray-500\">PNG, JPG, GIF up to 10MB</p>
                        </div>
                        <input type=\"file\" name=\"image\" accept=\"image/*\" class=\"hidden\" required>
                    </label>
                </div>
                <div id=\"imagePreview\" class=\"mt-2 hidden\">
                    <img src=\"\" alt=\"Vehicle preview\" class=\"h-20 rounded-lg\">
                </div>
            </div>

            <!-- Color Picker with live preview -->
            <div class=\"mb-5\">
                <label class=\"block text-sm font-medium text-gray-700 mb-1\">Vehicle Color</label>
                <div class=\"flex items-center space-x-3\">
                    <input type=\"color\" name=\"color\" value=\"#3B82F6\" class=\"w-12 h-12 p-1 border border-gray-300 rounded-lg cursor-pointer\" required>
                    <div class=\"flex-1 h-10 rounded-lg border border-gray-300\" id=\"colorPreview\" style=\"background-color: #3B82F6;\"></div>
                </div>
            </div>

            <!-- Year with better number input -->
            <div class=\"mb-5\">
                <label class=\"block text-sm font-medium text-gray-700 mb-1\">Year of Manufacture</label>
                <div class=\"relative\">
                    <div class=\"absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none\">
                        
                    </div>
                    <input type=\"number\" name=\"year\" placeholder=\"e.g. 2023\" min=\"1900\" max=\"2100\" class=\"w-full p-3 pl-10 border border-gray-300 rounded-lg bg-gray-50 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200\" required>
                </div>
            </div>

            <!-- Air Conditioning toggle switch -->
            <div class=\"mb-5 flex items-center justify-between\">
                <label class=\"text-sm font-medium text-gray-700\">Air Conditioning</label>
                <label class=\"relative inline-flex items-center cursor-pointer\">
                    <input type=\"checkbox\" name=\"airConditioning\" class=\"sr-only peer\">
                    <div class=\"w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-500\"></div>
                </label>
            </div>

            <!-- Submit Button -->
            <div class=\"flex justify-end mt-6\">
                <button type=\"button\" class=\"mr-2 px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition duration-200\">Cancel</button>
                <button type=\"submit\" class=\"px-6 py-2 bg-blue-500 text-white font-medium rounded-lg hover:from-blue-600 hover:to-indigo-700 focus:ring-4 focus:ring-blue-300 focus:outline-none transition duration-200\">Add Vehicle</button>
            </div>
        </form>
    </div>
</div>

{# Styles for the Modal #}
<style>
    input::placeholder {
        color: #9ca3af; /* Tailwind gray-400 */
    }

    .modal {
        display: none; 
        position: fixed; 
        z-index: 50; 
        left: 0;
        top: 0;
        width: 100%; 
        height: 100%;
        background-color: rgba(0,0,0,0.5);
        overflow-y: auto;
        backdrop-filter: blur(3px);
        transition: all 0.3s ease;
    }

    .modal-content {
        background-color: #fefefe;
        margin: 1% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 90%; 
        max-width: 600px;
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        text-align: left;
        transform: scale(0.95);
        animation: modalopen 0.3s ease forwards;
    }

    @keyframes modalopen {
        from {
            opacity: 0;
            transform: scale(0.95);
        }
        to {
            opacity: 1;
            transform: scale(1);
        }
    }

    .close-button {
        float: right;
        font-size: 28px;
        font-weight: bold;
        cursor: pointer;
        transition: color 0.2s ease;
    }

    .close-button:hover,
    .close-button:focus {
        color: rgba(42, 41, 63, 0.8);
        text-decoration: none;
        cursor: pointer;
    }

    /* Custom range slider */
    input[type=range]::-webkit-slider-thumb {
        -webkit-appearance: none;
        appearance: none;
        width: 18px;
        height: 18px;
        border-radius: 50%;
        background: #3B82F6;
        cursor: pointer;
        border: 2px solid white;
        box-shadow: 0 1px 3px rgba(0,0,0,0.3);
    }

    input[type=range]::-moz-range-thumb {
        width: 18px;
        height: 18px;
        border-radius: 50%;
        background: #3B82F6;
        cursor: pointer;
        border: 2px solid white;
        box-shadow: 0 1px 3px rgba(0,0,0,0.3);
    }

    /* For Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }
    /* For Chrome */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
</style>

{# JavaScript to handle modal functionality #}
<script>
    // Get the modal
    var modal = document.getElementById(\"simpleModal\");

    // Get the button that opens the modal
    var btn = document.getElementById(\"openModal\");

    // Get the <span> element that closes the modal
    var closeBtn = document.getElementsByClassName(\"close-button\")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
        modal.style.display = \"block\";
        document.body.style.overflow = \"hidden\"; // Prevent scrolling behind modal
    }

    // When the user clicks on <span> (x), close the modal
    closeBtn.onclick = function() {
        modal.style.display = \"none\";
        document.body.style.overflow = \"auto\"; // Re-enable scrolling
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = \"none\";
            document.body.style.overflow = \"auto\"; // Re-enable scrolling
        }
    }

    // Handle seats slider
    const seatsSlider = document.querySelector('input[name=\"seats\"]');
    const seatsValue = document.getElementById('seatsValue');
    seatsSlider.addEventListener('input', function() {
        seatsValue.textContent = this.value;
    });

    // Handle image preview
    const imageInput = document.querySelector('input[name=\"image\"]');
    const imagePreview = document.getElementById('imagePreview');
    
    imageInput.addEventListener('change', function() {
        if (this.files && this.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                imagePreview.querySelector('img').src = e.target.result;
                imagePreview.classList.remove('hidden');
            }
            reader.readAsDataURL(this.files[0]);
        }
    });

    // Handle color preview
    const colorPicker = document.querySelector('input[name=\"color\"]');
    const colorPreview = document.getElementById('colorPreview');
    
    colorPicker.addEventListener('input', function() {
        colorPreview.style.backgroundColor = this.value;
    });

    // Set the current year as max value for the year input
    document.querySelector('input[name=\"year\"]').max = new Date().getFullYear() + 1;
</script>", "utils/_vModal.html.twig", "D:\\GitHub\\WebApp\\UrbanLink\\UrbanLink_Symfony_Fork - Copy\\templates\\utils\\_vModal.html.twig");
    }
}
