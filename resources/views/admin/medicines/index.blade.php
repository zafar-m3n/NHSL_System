<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
                {{ __('Medicines Management') }}
            </h2>
            <a href="{{ route('admin.medicines.create') }}"
                class="inline-flex items-center rounded-md border border-transparent bg-gray-800 px-4 py-2 text-xs font-semibold uppercase tracking-widest text-white transition duration-150 ease-in-out hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 active:bg-gray-900 dark:bg-gray-200 dark:text-gray-800 dark:hover:bg-white dark:focus:bg-white dark:focus:ring-offset-gray-800 dark:active:bg-gray-300">
                {{ __('Create New Medicine') }}
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if (session('success'))
                        <div x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                            class="mb-4 flex items-center justify-between rounded-md border border-green-400 bg-green-100 p-4 text-green-700">
                            {{ session('success') }}
                            <button type="button" class="ml-2 text-green-700 hover:text-green-900 focus:outline-none"
                                aria-label="Close" @click="show = false">
                                <span aria-hidden="true" class="text-2xl">&times;</span>
                            </button>
                        </div>
                    @endif

                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50 dark:bg-gray-700">
                            <tr>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                                    Name</th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                                    Description</th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                                    Quantity</th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                                    Price</th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                                    Expiry Date</th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                                    Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 bg-white dark:bg-gray-800">
                            @foreach ($medicines as $medicine)
                                <tr>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $medicine->name }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $medicine->description }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $medicine->quantity }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $medicine->price }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $medicine->expiry_date }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">
                                        <a href="{{ route('admin.medicines.edit', $medicine) }}"
                                            class="inline-flex items-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-xs font-semibold uppercase tracking-widest text-white transition duration-150 ease-in-out hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 active:bg-indigo-700 dark:focus:ring-offset-gray-800">
                                            {{ __('Edit') }}
                                        </a>
                                        <form action="{{ route('admin.medicines.destroy', $medicine) }}" method="POST"
                                            class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="inline-flex items-center rounded-md border border-transparent bg-red-600 px-4 py-2 text-xs font-semibold uppercase tracking-widest text-white transition duration-150 ease-in-out hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 active:bg-red-700 dark:focus:ring-offset-gray-800">
                                                {{ __('Delete') }}
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<!-- Include the necessary Font Awesome, Tailwind CSS, and Alpine.js -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
