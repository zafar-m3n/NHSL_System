<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="mb-6 text-2xl font-semibold">System Analytics</h3>
                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                        <div class="rounded-lg bg-blue-100 p-6 shadow-lg">
                            <div class="flex items-center">
                                <div class="flex h-12 w-12 items-center justify-center rounded-full bg-blue-500">
                                    <i class="fas fa-users text-white"></i>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-semibold">Total Users</h4>
                                    <p class="mt-2 text-3xl font-bold text-blue-700">100</p>
                                </div>
                            </div>
                        </div>
                        <div class="rounded-lg bg-green-100 p-6 shadow-lg">
                            <div class="flex items-center">
                                <div class="flex h-12 w-12 items-center justify-center rounded-full bg-green-500">
                                    <i class="fas fa-user-injured text-white"></i>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-semibold">Total Patients</h4>
                                    <p class="mt-2 text-3xl font-bold text-green-700">1,234</p>
                                </div>
                            </div>
                        </div>
                        <div class="rounded-lg bg-yellow-100 p-6 shadow-lg">
                            <div class="flex items-center">
                                <div class="flex h-12 w-12 items-center justify-center rounded-full bg-yellow-500">
                                    <i class="fas fa-user-md text-white"></i>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-semibold">Total Staff</h4>
                                    <p class="mt-2 text-3xl font-bold text-yellow-700">89</p>
                                </div>
                            </div>
                        </div>
                        <div class="rounded-lg bg-red-100 p-6 shadow-lg">
                            <div class="flex items-center">
                                <div class="flex h-12 w-12 items-center justify-center rounded-full bg-red-500">
                                    <i class="fas fa-pills text-white"></i>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-semibold">Medicine Inventory</h4>
                                    <p class="mt-2 text-3xl font-bold text-red-700">500 units</p>
                                </div>
                            </div>
                        </div>
                        <div class="rounded-lg bg-purple-100 p-6 shadow-lg">
                            <div class="flex items-center">
                                <div class="flex h-12 w-12 items-center justify-center rounded-full bg-purple-500">
                                    <i class="fas fa-boxes text-white"></i>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-semibold">Supplies Inventory</h4>
                                    <p class="mt-2 text-3xl font-bold text-purple-700">300 units</p>
                                </div>
                            </div>
                        </div>
                        <div class="rounded-lg bg-pink-100 p-6 shadow-lg">
                            <div class="flex items-center">
                                <div class="flex h-12 w-12 items-center justify-center rounded-full bg-pink-500">
                                    <i class="fas fa-calendar-check text-white"></i>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-semibold">Appointments</h4>
                                    <p class="mt-2 text-3xl font-bold text-pink-700">75</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Staff Performance Overview Section -->
            <div class="mt-8 overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="mb-4 text-2xl font-semibold">Staff Performance Overview</h3>
                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                        <div class="rounded-lg bg-indigo-100 p-6 shadow-lg">
                            <div class="flex items-center">
                                <div class="flex h-12 w-12 items-center justify-center rounded-full bg-indigo-500">
                                    <i class="fas fa-smile text-white"></i>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-semibold">Avg. Patient Satisfaction</h4>
                                    <p class="mt-2 text-3xl font-bold text-indigo-700">92%</p>
                                </div>
                            </div>
                        </div>
                        <div class="rounded-lg bg-teal-100 p-6 shadow-lg">
                            <div class="flex items-center">
                                <div class="flex h-12 w-12 items-center justify-center rounded-full bg-teal-500">
                                    <i class="fas fa-tasks text-white"></i>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-semibold">Completed Tasks</h4>
                                    <p class="mt-2 text-3xl font-bold text-teal-700">120</p>
                                </div>
                            </div>
                        </div>
                        <div class="rounded-lg bg-orange-100 p-6 shadow-lg">
                            <div class="flex items-center">
                                <div class="flex h-12 w-12 items-center justify-center rounded-full bg-orange-500">
                                    <i class="fas fa-exclamation-circle text-white"></i>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-semibold">Outstanding Tasks</h4>
                                    <p class="mt-2 text-3xl font-bold text-orange-700">10</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Activities Section -->
            <div class="mt-8 overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="mb-4 text-2xl font-semibold">Recent Activities</h3>
                    <ul class="list-inside list-disc">
                        <li>Dr. Smith performed a surgery on July 10, 2024</li>
                        <li>New patient John Doe registered on July 9, 2024</li>
                        <li>Nurse Jane updated her schedule on July 8, 2024</li>
                        <li>Monthly staff meeting held on July 7, 2024</li>
                        <li>New equipment purchased for the surgery department on July 6, 2024</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
