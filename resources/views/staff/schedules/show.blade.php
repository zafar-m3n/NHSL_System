<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Schedule Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="mb-4">
                        <h3 class="text-lg font-medium">{{ __('Date') }}: {{ $schedule->date }}</h3>
                    </div>

                    <div class="mb-4">
                        <strong>{{ __('Start Time') }}:</strong> {{ $schedule->start_time }}
                    </div>

                    <div class="mb-4">
                        <strong>{{ __('End Time') }}:</strong> {{ $schedule->end_time }}
                    </div>

                    <div class="mb-4">
                        <strong>{{ __('Description') }}:</strong> {{ $schedule->description }}
                    </div>

                    <a href="{{ route('staff.schedules.index') }}"
                        class="inline-flex items-center rounded-md border border-transparent bg-gray-800 px-4 py-2 text-xs font-semibold uppercase tracking-widest text-white transition duration-150 ease-in-out hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 active:bg-gray-900 dark:bg-gray-200 dark:text-gray-800 dark:hover:bg-white dark:focus:bg-white dark:focus:ring-offset-gray-800 dark:active:bg-gray-300">
                        {{ __('Back to Schedules') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
