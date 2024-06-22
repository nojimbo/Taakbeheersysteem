<div class="flex justify-center">
    {{-- Be like water. --}}
    <div>
        <input class="text-black" type="text" wire:model.live="task" wire:keydown.enter="addTask" placeholder="new task">
        @forelse ($tasks as $task)
            <div>
                @if($task->status == 'open')
                    <input type="checkbox" id="markAsDone-{{$task->id}}" wire:change="markAsDone({{$task->id}})">
                @endif
                <label for="markAsDone-{{$task->id}}" style="{{($task->status == 'done')?'text-decoration: line-through':''}}">{{$task->task}}</label>
            </div>
        @empty
            <p>Tasklist is empty.</p>
        @endforelse
    </div>
</div>
