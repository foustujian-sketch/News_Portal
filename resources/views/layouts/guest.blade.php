<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            :root {
                --primary-color: #FF5FA2;
                --secondary-color: #FFC2D9;
                --bg-color: #FFF7FA;
            }
            body {
                background-color: var(--bg-color) !important;
                font-family: 'Poppins', sans-serif !important;
            }
            .brand-name {
                font-family: 'Playfair Display', serif;
                font-size: 3.5rem;
                font-weight: 700;
                color: var(--primary-color);
                margin-bottom: 0;
            }
            .tagline {
                font-family: 'Poppins', sans-serif;
                color: #6B7280;
                font-size: 1.2rem;
                margin-top: -0.5rem;
                margin-bottom: 0;
            }
            .login-card {
                background-color: #ffffff !important;
                border-radius: 20px !important;
                box-shadow: 0 10px 25px rgba(255, 95, 162, 0.1) !important;
                border: none !important;
            }
            .btn-beautique {
                background: linear-gradient(45deg, var(--primary-color), #ff8fb1) !important;
                border: none ;
                transition: 0.3s ;
                border-radius: 5px ;
                padding: 10px 30px ;
                text-transform: uppercase;
                font-weight: 600;
                color: white ;
            }
            .btn-beautique:hover {
                opacity: 0.9;
                transform: translateY(-1px);
                box-shadow: 0 4px 12px rgba(255, 95, 162, 0.3);
            }
            input:focus {
                border-color: var(--primary-color) !important;
                ring-color: var(--primary-color) !important;
                box-shadow: 0 0 0 3px rgba(255, 95, 162, 0.2) !important;
            }
        </style>
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex items-center justify-center p-4">
            <div class="w-full sm:max-w-md">
                <!-- Branding Section -->
                <div class="text-center mb-6">
                    <img src="{{ asset('images/logo/beautique-logo.png') }}" alt="Beautique Logo" style="height: 250px; width: auto;" class="mx-auto">
                    <h1 class="brand-name">Beautique</h1>
                    <p class="tagline">Your Trusted Makeup Guide</p>
                </div>

                <!-- Login Card -->
                <div class="login-card overflow-hidden px-6 py-8">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </body>
</html>
