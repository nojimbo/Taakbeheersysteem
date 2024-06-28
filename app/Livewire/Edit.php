<?php

namespace App\Livewire;

use App\Models\Task;
use Illuminate\Http\Request;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Edit extends Component
{
    public $task;

    #[Validate('required|max:255')]
    public string $name = '';

    #[Validate('max:255')]
    public ?string $description = null;

    function mount(Request $request): void
    {
        (int)$id = $request->input('id');
        $this->task = Task::find($id);
    }

    function editTask(Task $task)
    {
        if ($this->name) {
            $task->name = $this->name;
        }
        if($this->description) {
            $task->description = $this->description;

        }
        $task->save();
        $this->dispatch('updated');
        $this->redirectRoute('list');
    }

    function deleteTask(Task $task): void
    {
        $task->delete();
        $this->redirectRoute('list');
    }

    #[Title('Task manager | Edit Task')]
    public function render()
    {
        return view('livewire.edit');
    }
}
