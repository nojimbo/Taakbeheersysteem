<div class="flex justify-center">
    <div class="w-full">

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
                <tr class="bg-red-50">
                    <td class="p-3 text-sm">{{$task->task}}</td>
                    <td class="p-3 text-sm">{{$task->description}}</td>
                    <td class="p-3 text-sm">{{$task->status}}</td>
                    <td class="p-3 text-sm">{{$task->notes}}</td>
                    <td><x-secondary-button :href="route('edit', ['id'=>$task->id])" wire:navigate>Edit</x-secondary-button></td>
                </tr>
            @empty
                <td colspan="4" class="p-3 text-sm text-center text-gray-300">Task list is empty.</td>
            @endforelse
            </tbody>
        </table>
    </div>
</div>
