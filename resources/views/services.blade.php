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
                        <h1 class="mb-4 text-4xl font-bold">Our Services</h1>
                        <p class="mb-4 text-lg">At the National Hospital of Sri Lanka, we offer a comprehensive range of
                            medical services to meet the diverse needs of our patients. Our dedicated team of healthcare
                            professionals is here to provide you with the best possible care.</p>
                        <div class="grid grid-cols-1 gap-4 md:grid-cols-3">
                            <div class="service-item">
                                <img src="{{ asset('images/service1.jpg') }}" alt="General Medicine"
                                    class="h-48 w-full rounded object-cover">
                                <h3 class="mt-2 text-xl font-semibold">General Medicine</h3>
                                <p>Comprehensive care for all ages and medical conditions.</p>
                            </div>
                            <div class="service-item">
                                <img src="{{ asset('images/service2.jpg') }}" alt="Surgery"
                                    class="h-48 w-full rounded object-cover">
                                <h3 class="mt-2 text-xl font-semibold">Surgery</h3>
                                <p>State-of-the-art surgical facilities and experienced surgeons.</p>
                            </div>
                            <div class="service-item">
                                <img src="{{ asset('images/service3.jpg') }}" alt="Pediatrics"
                                    class="h-48 w-full rounded object-cover">
                                <h3 class="mt-2 text-xl font-semibold">Pediatrics</h3>
                                <p>Dedicated care for infants, children, and adolescents.</p>
                            </div>
                            <div class="service-item">
                                <img src="{{ asset('images/service4.jpg') }}" alt="Maternity"
                                    class="h-48 w-full rounded object-cover">
                                <h3 class="mt-2 text-xl font-semibold">Maternity</h3>
                                <p>Comprehensive care for expectant mothers and their babies.</p>
                            </div>
                            <div class="service-item">
                                <img src="{{ asset('images/service5.jpg') }}" alt="Emergency Care"
                                    class="h-48 w-full rounded object-cover">
                                <h3 class="mt-2 text-xl font-semibold">Emergency Care</h3>
                                <p>24/7 emergency services for urgent medical needs.</p>
                            </div>
                            <div class="service-item">
                                <img src="{{ asset('images/service6.jpg') }}" alt="Diagnostic Services"
                                    class="h-48 w-full rounded object-cover">
                                <h3 class="mt-2 text-xl font-semibold">Diagnostic Services</h3>
                                <p>Advanced diagnostic services to accurately diagnose and treat conditions.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>
