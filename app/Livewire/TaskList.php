<?php

namespace App\Livewire;

use App\Models\Task;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

class TaskList extends Component
{
    public $tasks;

    #[Validate('required|boolean')]
    public bool $status = false;

    function mount(): void
    {
        $this->fetchTasks();
    }

    function fetchTasks(): void
    {
        $this->tasks = auth()->user()->Tasks;
    }

    function deleteTask(Task $task): void
    {
        $task->delete();
        $this->fetchTasks();
        $this->dispatch('deleted');
    }

    function changeStatus(Task $task): void
    {
        if($task->status) {
            $task->status = false;
        } else {
            $task->status = true;
        }
        $task->save();
        $this->fetchTasks();
    }

    #[Title('Task manager | Task List')]
    public function render()
    {
        return view('livewire.task-list');
    }
}
