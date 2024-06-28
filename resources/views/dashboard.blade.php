<x-app-layout>
    <x-slot name="header">
        <div class="flex w-full items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Dashboard') }}
            </h2>
            <div class="grow"></div>
            <x-primary-button :href="route('create')" wire:navigate>New Task</x-primary-button>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{__('You are logged in.')}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
