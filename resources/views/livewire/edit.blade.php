<div>
    <form wire:submit="editTask" class="flex justify-center">
        @csrf
        <x-text-input wire:model="task"
                      id="task"
                      class="bg-gray-800"
                      type="text"
                      name="task"
                      placeholder="task"
                      required />
        <x-text-input wire:model="description"
                      id="description"
                      class="bg-gray-800"
                      type="text"
                      name="description"
                      placeholder="description"
                      autocomplete="off" />
        <x-text-input wire:model="notes"
                      id="notes"
                      class="bg-gray-800"
                      type="text"
                      name="notes"
                      placeholder="notes"
                      autocomplete="off" />
        <x-primary-button type="submit">
            Add
        </x-primary-button>
    </form>
</div>
