<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Staff Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <!-- First Row (3 columns) -->
            <div class="mb-6 grid grid-cols-1 gap-6 md:grid-cols-3">
                <!-- First Column: Dynamic Statistics -->
                <div class="rounded-lg bg-white p-6 shadow-md dark:bg-gray-800">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">{{ __('Total Patients') }}</h3>
                    <p class="text-4xl font-bold text-blue-600 dark:text-blue-400">{{ $patientsCount }}</p>
                </div>

                <!-- Second & Third Column: Staff Schedule -->
                <div class="rounded-lg bg-white p-6 shadow-md dark:bg-gray-800 md:col-span-2">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">{{ __('Your Schedule') }}</h3>
                    @if ($staffSchedules->isEmpty())
                        <p class="text-gray-500">{{ __('No scheduled tasks.') }}</p>
                    @else
                        <ul class="list-inside list-disc">
                            @foreach ($staffSchedules as $schedule)
                                <li class="mb-2">
                                    <strong>{{ $schedule->date }}</strong>:
                                    {{ $schedule->start_time }} - {{ $schedule->end_time }}
                                    ({{ $schedule->description }})
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>

            <!-- Second Row (2 columns) -->
            <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                <!-- Recent Appointments (Static) -->
                <div class="rounded-lg bg-white p-6 shadow-md dark:bg-gray-800">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">{{ __('Recent Appointments') }}
                    </h3>
                    <table class="min-w-full bg-white dark:bg-gray-800">
                        <thead class="bg-gray-200 dark:bg-gray-700">
                            <tr>
                                <th class="px-4 py-2 text-left text-xs font-bold uppercase text-gray-500">
                                    {{ __('Date') }}</th>
                                <th class="px-4 py-2 text-left text-xs font-bold uppercase text-gray-500">
                                    {{ __('Patient') }}</th>
                                <th class="px-4 py-2 text-left text-xs font-bold uppercase text-gray-500">
                                    {{ __('Reason') }}</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-gray-600">
                            @foreach ($recentAppointments as $appointment)
                                <tr>
                                    <td class="px-4 py-2">{{ $appointment['date'] }}</td>
                                    <td class="px-4 py-2">{{ $appointment['patient'] }}</td>
                                    <td class="px-4 py-2">{{ $appointment['reason'] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Recent Patients -->
                <div class="rounded-lg bg-white p-6 shadow-md dark:bg-gray-800">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">{{ __('Recent Patients') }}</h3>
                    @if ($patients->isEmpty())
                        <p class="text-gray-500">{{ __('No recent patients.') }}</p>
                    @else
                        <table class="min-w-full bg-white dark:bg-gray-800">
                            <thead class="bg-gray-200 dark:bg-gray-700">
                                <tr>
                                    <th class="px-4 py-2 text-left text-xs font-bold uppercase text-gray-500">
                                        {{ __('Name') }}</th>
                                    <th class="px-4 py-2 text-left text-xs font-bold uppercase text-gray-500">
                                        {{ __('Date of Birth') }}</th>
                                    <th class="px-4 py-2 text-left text-xs font-bold uppercase text-gray-500">
                                        {{ __('Email') }}</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-gray-600">
                                @foreach ($patients as $patient)
                                    <tr>
                                        <td class="px-4 py-2">{{ $patient->first_name }} {{ $patient->last_name }}
                                        </td>
                                        <td class="px-4 py-2">{{ $patient->date_of_birth }}</td>
                                        <td class="px-4 py-2">{{ $patient->email }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
