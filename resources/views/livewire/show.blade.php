<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg flex justify-center">
            <div class="p-6 text-gray-900 dark:text-gray-100 w-full">
                <div class="px-4 sm:px-0 border-b border-gray-400">
                    <h3 class="text-lg font-semibold leading-7 text-white">Task details</h3>
                </div>
                <div class="ml-4">
                    <dl>
                        <div class="px-4 py-3 my-3 border-b border-b-gray-600 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt class="text-md font-medium leading-6 text-gray-200">ID:</dt>
                            <dd class="mt-1 ml-1 text-sm leading-6 text-gray-300 sm:col-span-2 sm:mt-0">{{$task->id}}</dd>
                        </div>
                        <div class="px-4 py-3 my-3 border-b border-b-gray-600 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt class="text-md font-medium leading-6 text-gray-200">Task Name:</dt>
                            <dd class="mt-1 ml-1 text-sm leading-6 text-gray-300 sm:col-span-2 sm:mt-0">{{$task->task}}</dd>
                        </div>
                        <div class="px-4 py-3 my-3 border-b border-b-gray-600 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt class="text-md font-medium leading-6 text-gray-200">Description:</dt>
                            <dd class="mt-1 ml-1 text-sm leading-6 text-gray-300 sm:col-span-2 sm:mt-0">{{$task->description}}</dd>
                        </div>
                        <div class="px-4 py-3 my-3 border-b border-b-gray-600 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt class="text-md font-medium leading-6 text-gray-200">Status:</dt>
                            <dd class="mt-1 ml-1 text-sm leading-6 text-gray-300 sm:col-span-2 sm:mt-0">{{$task->status ? 'Done': 'Active'}}</dd>
                        </div>
                        <div class="px-4 py-3 my-3 border-b border-b-gray-600 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt class="text-md font-medium leading-6 text-gray-200">Creation Date:</dt>
                            <dd class="mt-1 ml-1 text-sm leading-6 text-gray-400 sm:col-span-2 sm:mt-0">{{$task->created_at}}</dd>
                        </div>
                        <div class="px-4 py-3 my-3 border-b border-b-gray-600 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt class="text-md font-medium leading-6 text-gray-200">last update:</dt>
                            <dd class="mt-1 ml-1 text-sm leading-6 text-gray-400 sm:col-span-2 sm:mt-0">{{$task->updated_at}}</dd>
                        </div>
                    </dl>
                </div>
                <div class="w-full flex justify-end">
                    <x-secondary-button wire:click="deleteTask({{$task->id}})" class="group m-0.5 hover:dark:border-red-700 focus:ring-0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="group-hover:text-red-600 size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                        </svg>
                    </x-secondary-button>
                </div>
            </div>
        </div>
    </div>
</div>
