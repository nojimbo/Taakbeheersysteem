<?php

namespace App\Livewire;

use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Create extends Component
{
    public $tasks;

    #[Validate('required|max:255')]
    public string $task = '';

    #[Validate('max:255')]
    public ?string $description = null;

    #[Validate('required|boolean')]
    public bool $status = false;

    function createTask(): void
    {
        if($this->task != ''){
            $task = new Task();
            $task->user_id = Auth::id();
            $task->task = $this->task;
            $task->description = $this->description;
            $task->save();
            $this->reset(['task', 'description']);
            $this->dispatch('added');
        }
    }

    #[Title('Task manager | Create Task')]
    public function render()
    {
        return view('livewire.create');
    }
}
