<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg flex justify-center">
            <div class="p-6 text-gray-900 dark:text-gray-100 w-full">
                <form wire:submit="editTask({{$_GET['id']}})" class="flex flex-col justify-center">
                    @csrf
                    <x-input-label for="task" :value="__('Task name:')" />
                    <x-text-input wire:model="name"
                                  id="task"
                                  class="bg-gray-800 block mt-1 w-full"
                                  type="text"
                                  name="task"
                                  placeholder="{{$task->task}}"
                                  autofocus />
                    <x-input-error :messages="$errors->get('task')" class="mt-2" />

                    <x-input-label for="description" :value="__('Description:')" class="mt-4" />
                    <x-text-input wire:model="description"
                                  id="description"
                                  class="bg-gray-800 block mt-1 w-full"
                                  type="text"
                                  name="description"
                                  placeholder="{{$task->description}}"
                                  autocomplete="off" />
                    <x-input-error :messages="$errors->get('description')" class="mt-2" />

                    <div class="w-full flex items-center">
                        <x-action-message on="updated" class="mt-2 w-full">
                            {{__('Task updated.')}}
                        </x-action-message>

                        <div class="mt-2 w-full flex justify-end">
                            <x-primary-button type="submit">
                                Save
                            </x-primary-button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
