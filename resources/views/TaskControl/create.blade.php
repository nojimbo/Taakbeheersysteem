<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('show') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="post" action="{{route('create.submit')}}">
                        @csrf
                        <label for="name">Task Name: </label>
                        <input type="text" name="name" id="name"><br><br>
                
                        <label for="description">Description: </label>
                        <input type="text" name="description" id="description" size="10" placeholder="A short description of the task"><br><br>

                        <label for="notes">Notes: </label>
                        <input type="text" name="notes" id="notes" placeholder="Add extra comments"><br><br>

                        <label for="status">Status: </label>
                        <select name="status" id="status">
                            <option value="notStarted" selected>Not Started</option>
                            <option value="inProgress">In Progress</option>
                            <option value="completed">Completed</option>
                        </select><br><br>
                
                        <input type="submit" name="create" value="create">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
