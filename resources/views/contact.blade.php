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
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        @include('layouts.navigation')

        <!-- Page Content -->
        <main>
            <div class="container mx-auto px-4 py-8">
                <div class="mb-8 overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h1 class="mb-4 text-4xl font-bold">Contact Us</h1>
                        <p class="mb-4 text-lg">We are here to assist you with any inquiries or concerns you may have.
                            Reach out to us through the contact information provided below.</p>
                        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                            <div class="contact-item">
                                <h3 class="text-xl font-semibold">Address</h3>
                                <p>123 Hospital Road, Colombo, Sri Lanka</p>
                            </div>
                            <div class="contact-item">
                                <h3 class="text-xl font-semibold">Phone</h3>
                                <p>+94 11 2345678</p>
                            </div>
                            <div class="contact-item">
                                <h3 class="text-xl font-semibold">Email</h3>
                                <p>info@nationalhospital.lk</p>
                            </div>
                            <div class="contact-item">
                                <h3 class="text-xl font-semibold">Working Hours</h3>
                                <p>Monday - Friday: 8:00 AM - 5:00 PM</p>
                            </div>
                        </div>
                        <div id="map" class="mt-4 h-64 w-full rounded"></div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var map = L.map('map').setView([6.919144, 79.868027], 15);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '© OpenStreetMap contributors'
            }).addTo(map);

            L.marker([6.919144, 79.868027]).addTo(map)
                .bindPopup('National Hospital of Sri Lanka')
                .openPopup();
        });
    </script>
</body>

</html>
