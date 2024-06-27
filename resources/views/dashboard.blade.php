<x-app-layout>
    <x-slot name="header">
        <div>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Dashboard') }}
            </h2>

            <x-primary-button :href="route('create')" wire:navigate>New Task</x-primary-button>
            @if(Route::currentRouteName() == 'list')

            @endif
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if(Route::currentRouteName() == 'show')
                        <livewire:show :id="$_GET['id']" />
                    @elseif(Route::currentRouteName() == 'create')
                        <livewire:create />
                    @elseif(Route::currentRouteName() == 'edit')
                        <livewire:edit :id="$_GET['id']" />
                    @else
                        <livewire:task-list />
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
