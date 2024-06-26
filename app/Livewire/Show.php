<?php

namespace App\Livewire;

use App\Models\Task;
use Livewire\Component;

class Show extends Component
{
    public $tasks;
    public string $task;

    function mount(): void
    {
        $this->fetchTasks();
    }

    function fetchTasks(): void
    {
        $this->tasks = auth()->user()->Tasks;
    }

    function filterTasks(): void
    {
        $this->tasks = auth()->user()->filter;
    }

    function sortTasks(): void
    {
        $this->tasks = auth()->user()->sort;
    }

    function deleteTask(Task $task): void
    {
        $task->delete();
        $this->redirectRoute('show');
    }

    public function render()
    {
        return view('livewire.show');
    }
}
