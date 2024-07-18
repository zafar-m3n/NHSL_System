<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
                {{ __('Edit Schedule') }}
            </h2>
            <a href="{{ route('admin.schedules.index') }}"
                class="inline-flex items-center rounded-md border border-transparent bg-gray-800 px-4 py-2 text-xs font-semibold uppercase tracking-widest text-white transition duration-150 ease-in-out hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 active:bg-gray-900 dark:bg-gray-200 dark:text-gray-800 dark:hover:bg-white dark:focus:bg-white dark:focus:ring-offset-gray-800 dark:active:bg-gray-300">
                {{ __('Back to Schedules') }}
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if ($errors->any())
                        <div class="mb-4 rounded-md border border-red-400 bg-red-100 p-4 text-red-700">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('admin.schedules.update', $schedule) }}" method="POST">
                        @csrf
                        @method('PATCH')

                        <div class="mb-4">
                            <label for="staff_id"
                                class="block text-sm font-medium text-gray-700 dark:text-gray-200">{{ __('Staff Member') }}</label>
                            <select name="staff_id" id="staff_id"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                @foreach ($staffs as $staff)
                                    <option value="{{ $staff->id }}"
                                        {{ $schedule->staff_id == $staff->id ? 'selected' : '' }}>{{ $staff->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="date"
                                class="block text-sm font-medium text-gray-700 dark:text-gray-200">{{ __('Date') }}</label>
                            <input type="date" name="date" id="date" value="{{ $schedule->date }}"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        </div>

                        <div class="mb-4">
                            <label for="start_time"
                                class="block text-sm font-medium text-gray-700 dark:text-gray-200">{{ __('Start Time') }}</label>
                            <input type="time" name="start_time" id="start_time" value="{{ $schedule->start_time }}"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        </div>

                        <div class="mb-4">
                            <label for="end_time"
                                class="block text-sm font-medium text-gray-700 dark:text-gray-200">{{ __('End Time') }}</label>
                            <input type="time" name="end_time" id="end_time" value="{{ $schedule->end_time }}"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        </div>

                        <div class="mb-4">
                            <label for="description"
                                class="block text-sm font-medium text-gray-700 dark:text-gray-200">{{ __('Description') }}</label>
                            <textarea name="description" id="description" rows="4"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">{{ $schedule->description }}</textarea>
                        </div>

                        <div class="flex justify-end">
                            <button type="submit"
                                class="inline-flex items-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-xs font-semibold uppercase tracking-widest text-white transition duration-150 ease-in-out hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 active:bg-indigo-700 dark:focus:ring-offset-gray-800">
                                {{ __('Update Schedule') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<!-- Include the necessary Font Awesome, Tailwind CSS, and Alpine.js -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
