<?php

namespace App\Livewire;

use App\Models\Task;
use Illuminate\Http\Request;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Show extends Component
{
    public $task;

    function mount(Request $request): void
    {
        (int)$id = $request->input('id');
        $this->task = Task::find($id);
    }

    #[Title('Task Details')]
    public function render()
    {
        return view('livewire.show');
    }
}
