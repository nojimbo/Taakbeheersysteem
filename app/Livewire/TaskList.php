<?php

namespace App\Livewire;

use App\Models\Task;
use Livewire\Attributes\Validate;
use Livewire\Component;

class TaskList extends Component
{
    public $tasks;

    #[Validate('required|max:255')]
    public string $task = '';

    #[Validate('required|boolean')]
    public bool $status = false;

    function mount(): void
    {
        $this->tasks = auth()->user()->Tasks;
    }

    function deleteTask(Task $task): void
    {
        $task->delete();
        $this->mount();
    }

    function changeStatus(Task $task): void
    {
        if($task->status) {
            $task->status = false;
        } else {
            $task->status = true;
        }
        $task->save();
        $this->mount();
    }

    public function render()
    {
        return view('livewire.task-list');
    }
}
