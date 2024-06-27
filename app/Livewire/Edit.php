<?php

namespace App\Livewire;

use App\Models\Task;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Edit extends Component
{
    public $tasks;

    #[Validate('required|max:255')]
    public string $task = '';

    #[Validate('max:255')]
    public ?string $description = null;

    function mount($id): void
    {
        $this->tasks = Task::find($id);
    }

    function editTask(Task $task)
    {
        if ($this->task) {
            $task->task = $this->task;
        }
        if($this->description) {
            $task->description = $this->description;

        }
        $task->save();
        $this->dispatch('updated');
        $this->redirectRoute('dashboard');
    }

    public function render()
    {
        return view('livewire.edit');
    }
}
