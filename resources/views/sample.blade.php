<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dark Theme Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Custom styles for dark theme */
        body.dark {
            background-color: transparent;
            color: #cbd5e0;
        }

        /* Set background image */
        body {
            background-image: url('/storage/img2.webp');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            position: relative;
            display: flex;
            flex-direction: column;
        }

        /* Footer styles */
        footer {
            width: 100%;
            background-color: #1a202c;
            padding: 20px 0;
            text-align: center;
        }

        /* Center navigation links */
        .center-nav {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Read more button styles */
        .read-more-btn-container {
            margin-top: 20px; /* Add margin to separate it from the footer */
        }

        .read-more-btn {
            padding: 10px 20px; /* Adjust padding as needed */
            font-size: 16px; /* Adjust font size as needed */
        }

        @media (max-width: 768px) {
            .read-more-btn {
                padding: 8px 16px; /* Adjust padding for smaller screens */
                font-size: 14px; /* Adjust font size for smaller screens */
            }
        }
    </style>
</head>
<body>
    <header class="py-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex justify-content-center">
                <img src="/storage/logo.png" alt="Logo" class="h-10 w-auto">
                <h2 class="text-white text-4xl ">Info Sys</h2>
            </div>
            <nav class="hidden md:block">
                <ul class="flex space-x-6 gap-8 py-4">
                    <li><a href="#" class="text-white hover:text-gray-300">Home</a></li>
                    <li><a href="#" class="text-white hover:text-gray-300">About</a></li>
                    <li><a href="#" class="text-white hover:text-gray-300">Contact</a></li>
                </ul>
            </nav>
            <div class="md:flex md:items-center">
                <ul class="flex space-x-6">
                    <li class="hidden md:block"><a href="#" class="text-white hover:text-gray-300">Login</a></li>
                    <li class="hidden md:block"><a href="#" class="text-white hover:text-gray-300">Register</a></li>
                </ul>
            </div>
            <!-- Hamburger icon for small screens -->
            <button class="md:hidden" id="menuToggle">
                <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
    </header>

    <!-- Responsive Navigation Menu (Hidden by default) -->
    <nav class="hidden md:hidden bg-gray-800 py-4" id="responsiveMenu">
        <div class="container mx-auto flex justify-center items-center">
            <ul class="flex flex-col items-center space-y-4">
                <li><a href="#" class="text-white hover:text-gray-300">Home</a></li>
                <li><a href="#" class="text-white hover:text-gray-300">About</a></li>
                <li><a href="#" class="text-white hover:text-gray-300">Contact</a></li>
                <li><a href="#" class="text-white hover:text-gray-300">Login</a></li>
                <li><a href="#" class="text-white hover:text-gray-300">Register</a></li>
            </ul>
        </div>
    </nav>

    <div class="container mx-auto py-16 flex flex-col items-center justify-center mt-10">
        <h1 class="text-4xl font-bold mb-8 text-white welcome-title">Welcome to Information System</h1>
        <p class="text-lg mb-8 text-white description"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita eos sed dolorum, quibusdam unde odio commodi aliquid et voluptatum aut officiis porro atque, iure ipsum odit omnis asperiores optio rem!Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tempor euismod justo, id ultricies tortor convallis et.</p>
        <div class="read-more-btn-container">
            <a href="#" class="bg-blue-500 text-white font-bold py-2 px-4 rounded read-more-btn">Read More</a>
        </div>
    </div>

    <footer class="py-8 bg-gray-800 text-gray-300 mt-auto"> <!-- Use mt-auto to push footer to the bottom -->
        <div class="container mx-auto text-center">
            &copy; 2024 Info Sys Inc. All rights reserved.
        </div>
    </footer>

    <!-- Script to toggle responsive navigation menu -->
    <script>
        document.getElementById('menuToggle').addEventListener('click', function() {
            document.getElementById('responsiveMenu').classList.toggle('hidden');
        });
    </script>
</body>
</html>
