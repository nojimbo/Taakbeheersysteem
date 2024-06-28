<?php

namespace App\Livewire\Components;

use App\Models\Task;
use Livewire\Component;

class DeleteTask extends Component
{

    function deleteTask(Task $task): void
    {
        $task->delete();
        $this->fetchTasks();
        $this->dispatch('deleted');
    }

    public function render()
    {
        return view('livewire.components.delete-task');
    }
}
