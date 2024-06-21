<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Show') }}
        </h2>
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a class="font-semibold text-l text-gray-800 dark:text-gray-200 leading-tight border rounded-full flex p-2 w-20" href="route('create.form')">
                        New Task <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" /></svg>
                    </a>
                    <table class="w-full table-fixed">
                        <thead class="bg-gray-50 dark:bg-gray-900 border-b-2 uppercase border-gray-200 dark:border-gray-700">
                            <tr>
                                <th class="p-3 text-sm font-semibold tracking-wide text-left">Name</th>
                                <th class="p-3 text-sm font-semibold tracking-wide text-left">Description</th>
                                <th class="p-3 text-sm font-semibold tracking-wide text-left">Status</th>
                                <th class="p-3 text-sm font-semibold tracking-wide text-left">Notes</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-800">
                            @foreach($tasks as &$data)
                                <tr>
                                    <td class="p-3 text-sm">{{$data["taskName"]}}</td>
                                    <td class="p-3 text-sm">{{$data["taskDescription"]}}</td>
                                    <td class="p-3 text-sm">{{$data["taskStatus"]}}</td>
                                    <td class="p-3 text-sm">{{$data["taskNotes"]}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
