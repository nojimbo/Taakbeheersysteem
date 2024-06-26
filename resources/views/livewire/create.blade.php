<div>
    <form wire:submit="createTask">
        @csrf
        <div  class="flex flex-col justify-center">
            <x-input-label for="task" :value="__('Task:')" />
            <x-text-input wire:model="task"
                          id="task"
                          class="bg-gray-800 block mt-1 w-full"
                          type="text"
                          name="task"
                          placeholder="task"
                          required />
            <x-input-error :messages="$errors->get('task')" class="mt-2" />

            <x-input-label for="description" :value="__('Description:')" class="mt-2" />
            <x-text-input wire:model="description"
                          id="description"
                          class="bg-gray-800 block mt-1 w-full"
                          type="text"
                          name="description"
                          placeholder="description"
                          autocomplete="off" />
            <x-input-error :messages="$errors->get('description') "
                           class="mt-2" />

            <x-input-label for="notes" :value="__('Notes:')" class="mt-2" />
            <x-text-input wire:model="notes"
                          id="notes"
                          class="bg-gray-800 block mt-1 w-full"
                          type="text"
                          name="notes"
                          placeholder="notes"
                          autocomplete="off" />
            <x-input-error :messages="$errors->get('notes')" class="mt-2" />


        </div>
        <div class="w-full flex items-center">
            <x-action-message on="added" class="mt-2 w-full">
                {{__('Task created successfully.')}}
            </x-action-message>

            <div class="mt-2 w-full flex justify-end">
                <x-primary-button type="submit">
                    Add
                </x-primary-button>
            </div>
        </div>

    </form>


</div>
