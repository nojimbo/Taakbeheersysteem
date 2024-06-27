<div>
    <div class="px-4 sm:px-0 border-b border-gray-50">
        <h3 class="text-base font-semibold leading-7 text-white">Task details</h3>
    </div>
    <div class="ml-4">
        <dl>
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                <dt class="text-md font-medium leading-6 text-gray-300">ID:</dt>
                <dd class="mt-1 ml-1 text-sm leading-6 text-white sm:col-span-2 sm:mt-0">{{$tasks->id}}</dd>
            </div>
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                <dt class="text-md font-medium leading-6 text-gray-300">Task Name:</dt>
                <dd class="mt-1 ml-1 text-sm leading-6 text-white sm:col-span-2 sm:mt-0">{{$tasks->task}}</dd>
            </div>
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                <dt class="text-md font-medium leading-6 text-gray-300">Description:</dt>
                <dd class="mt-1 ml-1 text-sm leading-6 text-white sm:col-span-2 sm:mt-0">{{$tasks->description}}</dd>
            </div>
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                <dt class="text-md font-medium leading-6 text-gray-300">Status:</dt>
                <dd class="mt-1 ml-1 text-sm leading-6 text-white sm:col-span-2 sm:mt-0">{{$tasks->status ? 'Done': 'Active'}}</dd>
            </div>
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                <dt class="text-md font-medium leading-6 text-gray-300">Creation Date:</dt>
                <dd class="mt-1 ml-1 text-sm leading-6 text-white sm:col-span-2 sm:mt-0">{{$tasks->created_at}}</dd>
            </div>
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                <dt class="text-md font-medium leading-6 text-gray-300">last update:</dt>
                <dd class="mt-1 ml-1 text-sm leading-6 text-white sm:col-span-2 sm:mt-0">{{$tasks->updated_at}}</dd>
            </div>
        </dl>
    </div>
</div>
