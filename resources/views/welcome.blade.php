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
                        <h1 class="mb-4 text-4xl font-bold">Welcome to the National Hospital of Sri Lanka</h1>
                        <p class="mb-4 text-lg">We are committed to providing the highest quality healthcare services to
                            our community. Our team of dedicated professionals is here to support you and your family
                            with comprehensive medical care.</p>
                        <p class="mb-4 text-lg">Explore our website to learn more about our services, facilities, and
                            how we can assist you in your healthcare journey.</p>
                        <div class="mt-4">
                            <a href="#"
                                class="inline-block rounded bg-blue-500 px-4 py-2 font-bold text-white hover:bg-blue-700">Learn
                                More About Us</a>
                            <a href="#"
                                class="inline-block rounded bg-green-500 px-4 py-2 font-bold text-white hover:bg-green-700">View
                                Our Services</a>
                            <a href="#"
                                class="inline-block rounded bg-yellow-500 px-4 py-2 font-bold text-white hover:bg-yellow-700">Contact
                                Us</a>
                        </div>
                    </div>
                </div>

                <!-- Services Section -->
                <div class="mb-8 overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h2 class="mb-4 text-3xl font-bold">Our Services</h2>
                        <p class="mb-4 text-lg">We offer a wide range of medical services to cater to the needs of our
                            patients. From primary care to specialized treatments, we are equipped to handle all your
                            healthcare needs.</p>
                        <div class="grid grid-cols-1 gap-4 md:grid-cols-3">
                            <div class="service-item">
                                <img src="{{ asset('images/service1.jpg') }}" alt="Service 1"
                                    class="h-48 w-full rounded object-cover">
                                <h3 class="mt-2 text-xl font-semibold">General Medicine</h3>
                                <p>Comprehensive care for all ages and medical conditions.</p>
                            </div>
                            <div class="service-item">
                                <img src="{{ asset('images/service2.jpg') }}" alt="Service 2"
                                    class="h-48 w-full rounded object-cover">
                                <h3 class="mt-2 text-xl font-semibold">Surgery</h3>
                                <p>State-of-the-art surgical facilities and experienced surgeons.</p>
                            </div>
                            <div class="service-item">
                                <img src="{{ asset('images/service3.jpg') }}" alt="Service 3"
                                    class="h-48 w-full rounded object-cover">
                                <h3 class="mt-2 text-xl font-semibold">Pediatrics</h3>
                                <p>Dedicated care for infants, children, and adolescents.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Facilities Section -->
                <div class="mb-8 overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h2 class="mb-4 text-3xl font-bold">Our Facilities</h2>
                        <p class="mb-4 text-lg">Our hospital is equipped with modern facilities to ensure you receive
                            the best care possible. We continually update our infrastructure to meet the latest
                            standards in healthcare.</p>
                        <div class="grid grid-cols-1 gap-4 md:grid-cols-3">
                            <div class="facility-item">
                                <img src="{{ asset('images/facility1.jpg') }}" alt="Facility 1"
                                    class="h-48 w-full rounded object-cover">
                                <h3 class="mt-2 text-xl font-semibold">Emergency Room</h3>
                                <p>24/7 emergency services with quick response times.</p>
                            </div>
                            <div class="facility-item">
                                <img src="{{ asset('images/facility2.jpg') }}" alt="Facility 2"
                                    class="h-48 w-full rounded object-cover">
                                <h3 class="mt-2 text-xl font-semibold">Inpatient Rooms</h3>
                                <p>Comfortable and well-equipped inpatient rooms.</p>
                            </div>
                            <div class="facility-item">
                                <img src="{{ asset('images/facility3.jpg') }}" alt="Facility 3"
                                    class="h-48 w-full rounded object-cover">
                                <h3 class="mt-2 text-xl font-semibold">Laboratories</h3>
                                <p>Advanced labs for accurate diagnostics and research.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Us Section -->
                <div class="mb-8 overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h2 class="mb-4 text-3xl font-bold">Contact Us</h2>
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
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>
