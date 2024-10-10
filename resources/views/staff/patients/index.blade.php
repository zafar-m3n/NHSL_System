<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Patients') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($patients as $patient)
                    <div class="rounded-lg bg-white p-6 shadow-md dark:bg-gray-800">
                        <div class="flex items-center">
                            <!-- Profile Picture Circle with Random Background Color -->
                            <div class="flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full text-xl font-bold text-white"
                                style="background-color: {{ sprintf('#%06X', mt_rand(0, 0xffffff)) }};">
                                {{ strtoupper(substr($patient->first_name, 0, 1)) }}{{ strtoupper(substr($patient->last_name, 0, 1)) }}
                            </div>
                            <div class="ml-4">
                                <div class="text-lg font-semibold text-gray-900 dark:text-gray-100">
                                    {{ $patient->first_name }} {{ $patient->last_name }}
                                </div>
                                <div class="text-sm text-gray-500">
                                    {{ $patient->email }}
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 text-right">
                            <!-- View Details Button -->
                            <a href="{{ route('staff.patients.show', $patient->id) }}"
                                class="inline-flex items-center rounded-lg bg-blue-500 px-4 py-2 text-xs font-bold uppercase text-white hover:bg-blue-600">
                                {{ __('View Details') }}
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
