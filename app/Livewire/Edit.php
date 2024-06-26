<?php

namespace App\Livewire;

use App\Models\Task;
use Livewire\Component;

class Edit extends Component
{
    public $tasks;
    public string $task;
    public ?string $description;
    public string $notes;
    public string $status;

    function mount(): void
    {
        $this->tasks = auth()->user()->filter()->get();
    }

    function editTask(Task $task): void
    {
        $task->task = $this->task;
        $task->description = $this->description;
        $task->notes = $this->notes;
        $task->status = $this->status;
        $task->save();
        $this->redirectRoute('show');
    }

    function markAsDone(Task $task): void
    {
        $task->status = 'done';
        $task->save();
    }

    public function render()
    {
        return view('livewire.edit');
    }
}
