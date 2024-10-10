<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Online Resources') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="grid gap-6 lg:grid-cols-3">
                @foreach ($resources as $resource)
                    <div class="mx-auto max-w-sm overflow-hidden rounded-lg bg-white shadow-md dark:bg-gray-800">
                        <div class="p-6">
                            <h3 class="text-lg font-bold text-gray-900 dark:text-white">{{ $resource->title }}</h3>
                            <p class="text-sm text-gray-500 dark:text-gray-400">{{ $resource->author }}</p>
                            <p class="mt-2 text-gray-700 dark:text-gray-300">{{ $resource->description }}</p>

                            <a href="{{ $resource->link }}" target="_blank"
                                class="mt-4 block rounded-md bg-blue-500 py-2 text-center text-white hover:bg-blue-600">
                                {{ __('View Resource') }}
                            </a>
                        </div>

                        @if ($resource->is_featured)
                            <div class="bg-yellow-200 px-4 py-2 text-yellow-800">
                                {{ __('Featured') }}
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
