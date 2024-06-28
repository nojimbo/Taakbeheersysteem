<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg flex justify-center">
            <div class="p-6 text-gray-900 dark:text-gray-100 w-full">
                <form wire:submit="createTask">
                    @csrf
                    <div class="flex flex-col justify-center">
                        <x-input-label for="task" :value="__('Task name:')" />
                        <x-text-input wire:model="task"
                                      id="task"
                                      class="bg-gray-800 block mt-1 w-full"
                                      type="text"
                                      name="task"
                                      placeholder="task"
                                      required
                                      autofocus />
                        <x-input-error :messages="$errors->get('task')" class="mt-2" />

                        <x-input-label for="description" :value="__('Description:')" class="mt-2" />
                        <x-text-input wire:model="description"
                                      id="description"
                                      class="bg-gray-800 block mt-1 w-full"
                                      type="text"
                                      name="description"
                                      placeholder="description"
                                      autocomplete="off" />
                        <x-input-error :messages="$errors->get('description')" class="mt-2" />
                    </div>
                    <div class="w-full flex items-center">
                        <x-action-message on="added" class="mt-4 w-full">
                            {{__('Task created successfully.')}}
                        </x-action-message>

                        <div class="mt-3 w-full flex justify-end">
                            <x-primary-button type="submit">
                                Add
                            </x-primary-button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
