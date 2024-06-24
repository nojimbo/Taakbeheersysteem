<?php

namespace App\Livewire;

use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Create extends Component
{
    public $tasks;
    public string $task;
    public ?string $description;
    public ?string $notes;
    public string $status;

    function createTask(): void
    {
        if($this->task != ''){
            $task = new Task();
            $task->user_id = Auth::id();
            $task->task = $this->task;
            $task->description = $this->description;
            $task->notes = $this->notes;
            // $task->status = $this->status;
            $task->save();
            $this->reset(['task', 'description', 'notes', 'status']);
        }   //have to refresh after the for the tasks after the first one to show up, but after refreshing the page it updates immediatly.
    }

    public function render()
    {
        return view('livewire.create');
    }
}
