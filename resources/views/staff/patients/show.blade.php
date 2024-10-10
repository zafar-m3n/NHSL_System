<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Patient Details') }}: {{ $patient->first_name }} {{ $patient->last_name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden rounded-lg bg-white shadow-md dark:bg-gray-800">
                <!-- Profile Section -->
                <div class="flex items-center bg-gradient-to-r from-indigo-400 to-blue-100 p-6 text-slate-700">
                    <!-- Profile Circle -->
                    <div class="text-white flex h-20 w-20 flex-shrink-0 items-center justify-center rounded-full bg-white text-3xl font-bold shadow-lg"
                        style="background-color: {{ sprintf('#%06X', mt_rand(0, 0xffffff)) }};">
                        {{ strtoupper(substr($patient->first_name, 0, 1)) }}{{ strtoupper(substr($patient->last_name, 0, 1)) }}
                    </div>
                    <div class="ml-6">
                        <h3 class="text-2xl font-semibold">{{ $patient->first_name }} {{ $patient->last_name }}</h3>
                        <p><strong>{{ __('Email:') }}</strong> {{ $patient->email }}</p>
                        <p><strong>{{ __('Phone:') }}</strong> {{ $patient->phone_number }}</p>
                        <p><strong>{{ __('Address:') }}</strong> {{ $patient->address }}</p>
                        <p><strong>{{ __('Date of Birth:') }}</strong> {{ $patient->date_of_birth }}</p>
                    </div>
                </div>

                <!-- Appointment History and Medical History Tables -->
                <div class="p-6">
                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                        <!-- Appointment History Table -->
                        <div>
                            <h3 class="mb-2 text-lg font-semibold text-gray-800 dark:text-gray-200">
                                {{ __('Appointment History') }}</h3>
                            <div class="overflow-hidden rounded-lg bg-gray-100 shadow-md dark:bg-gray-700">
                                <table class="min-w-full table-auto bg-white dark:bg-gray-800">
                                    <thead>
                                        <tr class="bg-gray-200 dark:bg-gray-900">
                                            <th
                                                class="px-6 py-3 text-left text-xs font-bold uppercase tracking-wider text-gray-700 dark:text-gray-300">
                                                {{ __('Date') }}
                                            </th>
                                            <th
                                                class="px-6 py-3 text-left text-xs font-bold uppercase tracking-wider text-gray-700 dark:text-gray-300">
                                                {{ __('Reason') }}
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-300 dark:divide-gray-600">
                                        @foreach ($patient->appointment_history as $appointment)
                                            <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                                <td class="whitespace-nowrap px-6 py-4">{{ $appointment['date'] }}</td>
                                                <td class="whitespace-nowrap px-6 py-4">{{ $appointment['reason'] }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Medical History Table -->
                        <div>
                            <h3 class="mb-2 text-lg font-semibold text-gray-800 dark:text-gray-200">
                                {{ __('Medical History') }}</h3>
                            <div class="overflow-hidden rounded-lg bg-gray-100 shadow-md dark:bg-gray-700">
                                <table class="min-w-full table-auto bg-white dark:bg-gray-800">
                                    <thead>
                                        <tr class="bg-gray-200 dark:bg-gray-900">
                                            <th
                                                class="px-6 py-3 text-left text-xs font-bold uppercase tracking-wider text-gray-700 dark:text-gray-300">
                                                {{ __('Condition') }}
                                            </th>
                                            <th
                                                class="px-6 py-3 text-left text-xs font-bold uppercase tracking-wider text-gray-700 dark:text-gray-300">
                                                {{ __('Diagnosed') }}
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-300 dark:divide-gray-600">
                                        @foreach ($patient->medical_history as $medical)
                                            <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                                <td class="whitespace-nowrap px-6 py-4">{{ $medical['condition'] }}
                                                </td>
                                                <td class="whitespace-nowrap px-6 py-4">{{ $medical['diagnosed'] }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Back Button -->
                <div class="bg-gray-100 px-6 py-4 text-right dark:bg-gray-700">
                    <a href="{{ route('staff.patients.index') }}"
                        class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-bold uppercase tracking-widest text-white transition duration-150 ease-in-out hover:bg-indigo-700 focus:bg-indigo-800">
                        {{ __('Back to Patients') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
