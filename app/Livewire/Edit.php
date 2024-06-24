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

    function deleteTask(Task $task): void
    {
        $task->delete();
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
