<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Edit User') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('admin.users.update', $user) }}">
                        @csrf
                        @method('PATCH')

                        <div class="mb-4">
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" class="mt-1 block w-full" type="text" name="name"
                                :value="$user->name" required autofocus />
                        </div>

                        <div class="mb-4">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="mt-1 block w-full" type="email" name="email"
                                :value="$user->email" required />
                        </div>

                        <div class="mb-4">
                            <x-input-label for="password" :value="__('Password')" />
                            <x-text-input id="password" class="mt-1 block w-full" type="password" name="password" />
                        </div>

                        <div class="mb-4">
                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                            <x-text-input id="password_confirmation" class="mt-1 block w-full" type="password"
                                name="password_confirmation" />
                        </div>

                        <div class="mb-4">
                            <x-input-label for="usertype" :value="__('Usertype')" />
                            <select id="usertype" name="usertype" class="mt-1 block w-full">
                                <option value="admin" {{ $user->usertype == 'admin' ? 'selected' : '' }}>Admin</option>
                                <option value="staff" {{ $user->usertype == 'staff' ? 'selected' : '' }}>Staff</option>
                            </select>
                        </div>

                        <div class="mt-4 flex items-center justify-end">
                            <x-primary-button class="ml-4">
                                {{ __('Update') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
