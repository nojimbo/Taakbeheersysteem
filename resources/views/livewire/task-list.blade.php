<div class="flex justify-center">
    {{-- Be like water. --}}
    <div class="w-full">
        <form wire:submit="addTask" class="flex justify-center">
            <input class="dark:bg-gray-800" type="text" wire:model="task" placeholder="task" required>
            <input class="dark:bg-gray-800" type="text" wire:model="description" placeholder="optional description">
            <input class="dark:bg-gray-800" type="text" wire:model="notes" placeholder="optional notes">
            {{-- <select class="dark:bg-gray-800" name="status" id="status" wire:model="status">
                <option value="open" selected>Open</option>
                <option value="active">Active</option>
                <option value="done">Done</option>
            </select> --}}
            <button type="submit">Add</button>
        </form>

        <table class="w-full table-fixed">
            <thead class="bg-gray-50 dark:bg-gray-900 border-b-2 uppercase border-gray-200 dark:border-gray-700">
                <tr>
                    <th class="p-3 text-sm font-semibold tracking-wide text-left">Name</th>
                    <th class="p-3 text-sm font-semibold tracking-wide text-left">Description</th>
                    <th class="p-3 text-sm font-semibold tracking-wide text-left">Status</th>
                    <th class="p-3 text-sm font-semibold tracking-wide text-left">Notes</th>
                    <th class="p-3 text-sm font-semibold tracking-wide text-left">Edit</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-800">
                @forelse ($tasks as $task)
                    <tr class="bg-red-500">
                        <td class="p-3 text-sm">
                            @if($task->status == 'open')
                                <input type="checkbox" id="markAsDone-{{$task->id}}" wire:change="markAsDone({{$task->id}})">
                            @endif
                            {{$task->task}}
                        </td>
                        <td class="p-3 text-sm">{{$task->description}}</td>
                        <td class="p-3 text-sm">{{$task->status}}</td>
                        <td class="p-3 text-sm">{{$task->notes}}</td>
                        <td>
                            <button wire:click='deleteTask({{$task->id}})'>X</button>
                        </td>
                    </tr>
                @empty
                    <td colspan="4" class="p-3 text-sm text-center text-gray-300">Tasklist is empty.</td>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
