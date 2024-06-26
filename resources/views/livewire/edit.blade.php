<div>
    <form wire:submit="editTask" class="flex flex-col justify-center">
        @csrf
        <x-input-label for="task" :value="__('task')" />
        <x-text-input wire:model="task"
                      id="task"
                      class="bg-gray-800 block mt-1 w-full"
                      type="text"
                      name="task"
                      value=""
                      required />
        <x-input-error :messages="$errors->get('task')" class="mt-2" />

        <x-input-label for="description" :value="__('description')" />
        <x-text-input wire:model="description"
                      id="description"
                      class="bg-gray-800 block mt-1 w-full"
                      type="text"
                      name="description"
                      value=""
                      autocomplete="off" />
        <x-input-error :messages="$errors->get('description')" class="mt-2" />

        <x-input-label for="notes" :value="__('notes')" />
        <x-text-input wire:model="notes"
                      id="notes"
                      class="bg-gray-800 block mt-1 w-full"
                      type="text"
                      name="notes"
                      value=""
                      autocomplete="off" />
        <x-input-error :messages="$errors->get('notes')" class="mt-2" />

        <div class="w-full flex items-center">
            <x-action-message on="added" class="mt-2 w-full">
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
