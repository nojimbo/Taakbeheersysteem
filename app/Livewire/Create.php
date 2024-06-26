<?php

namespace App\Livewire;

use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Create extends Component
{
    public $tasks;

    #[Validate('required|min:5')]
    public string $task = '';

    public ?string $description = null;

    public ?string $notes = null;

    public string $status = 'open';

    function createTask(): void
    {
        if($this->task != ''){
            $task = new Task();
            $task->user_id = Auth::id();
            $task->task = $this->task;
            $task->description = $this->description;
            $task->notes = $this->notes;
            $task->save();
            $this->reset(['task', 'description', 'notes', 'status']);
            $this->dispatch('added');
        }
    }

    public function render()
    {
        return view('livewire.create');
    }
}
