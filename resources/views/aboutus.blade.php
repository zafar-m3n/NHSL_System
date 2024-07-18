<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'National Hospital of Sri Lanka') }}</title>
    <link rel="icon" href="{{ asset('favicons/favicon.png') }}" type="image/x-icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        @include('layouts.navigation')

        <!-- Page Content -->
        <main>
            <div class="container mx-auto px-4 py-8">
                <div class="mb-8 overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h1 class="mb-4 text-4xl font-bold">About Us</h1>
                        <p class="mb-4 text-lg">The National Hospital of Sri Lanka is the premier healthcare institution
                            in the country. We are dedicated to providing top-notch medical services and improving the
                            health and well-being of our community.</p>
                        <p class="mb-4 text-lg">Our hospital is equipped with state-of-the-art facilities and staffed by
                            a team of highly skilled professionals who are committed to delivering compassionate and
                            comprehensive care to every patient.</p>
                        <p class="mb-4 text-lg">We offer a wide range of medical services, from routine check-ups to
                            complex surgeries, ensuring that our patients receive the best possible care. Our mission is
                            to advance health through outstanding clinical care, education, and research.</p>
                        <p class="mb-4 text-lg">Thank you for choosing the National Hospital of Sri Lanka. We look
                            forward to serving you and your family.</p>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>
