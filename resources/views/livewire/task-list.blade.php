<x-slot name="header">
    <div class="flex w-full items-center">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Task list') }}
        </h2>
        <div class="grow"></div>
        <x-primary-button :href="route('create')" wire:navigate>New Task</x-primary-button>
    </div>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg flex justify-center">
            <div class="p-6 text-gray-900 dark:text-gray-100 w-full">
                <table class="w-full table-fixed border-separate border-spacing-y-2">
                    <thead class="bg-gray-50 dark:bg-gray-900 uppercase">
                    <tr>
                        <th class="p-3 text-sm font-semibold tracking-wide text-left w-10"></th>
                        <th class="p-3 text-sm font-semibold tracking-wide text-left">Name</th>
                        <th class="p-3 text-sm font-semibold tracking-wide text-left w-4/6">Description</th>
                        <th class="p-3 text-sm font-semibold tracking-wide text-left">Status</th>
                        <th class="p-3 text-sm font-semibold tracking-wide text-left"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($tasks as $task)
                        <tr class="even:dark:bg-gray-700/20">
                            <td class="text-sm">
                                <x-secondary-button wire:click="changeStatus({{$task->id}})" class="group text-black m-0.5 focus:ring-0 group aspect-square" style="padding: 8px">
                                    <div class="group-hover:visible group-active:visible {{$task->status ? 'visible' : 'invisible'}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="{{$task->status ? 'green' : 'currentColor'}}" class="size-4">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                        </svg>
                                    </div>
                                </x-secondary-button>
                            </td>
                            <td class="p-3 text-sm text-ellipsis overflow-hidden">
                                <a href="{{route('show', ['id'=>$task->id])}}" wire:navigate>{{$task->task}}</a>
                            </td>
                            <td class="p-3 text-sm">
                                <a href="{{route('show', ['id'=>$task->id])}}" wire:navigate>
                                    {{$task->description}}
                                </a>
                            </td>
                            <td class="p-3 text-sm">{{$task->status ? 'done' : 'active'}}</td>
                            <td>
                                <x-secondary-button :href="route('edit', ['id'=>$task->id])" wire:navigate class="m-0.5">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                    </svg>
                                </x-secondary-button>
                                <x-secondary-button wire:click="deleteTask({{$task->id}})" class="group m-0.5">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="group-hover:text-red-600 size-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                    </svg>
                                </x-secondary-button>
                            </td>
                        </tr>
                    @empty
                        <td colspan="4" class="p-3 text-sm text-center text-gray-400">Task list is empty.</td>
                    @endforelse
                    </tbody>
                    <caption class="caption-bottom h-6 mt-2">
                        <x-action-message on="deleted" class="w-full">
                            {{__('Task deleted.')}}
                        </x-action-message>
                    </caption>
                </table>
            </div>
        </div>
    </div>
</div>
