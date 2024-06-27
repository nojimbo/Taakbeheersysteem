<?php

namespace App\Livewire;

use App\Models\Task;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Show extends Component
{
    public $tasks;

    function mount($id): void
    {
        $this->tasks = Task::find($id);
    }

    public function render()
    {
        return view('livewire.show');
    }
}
