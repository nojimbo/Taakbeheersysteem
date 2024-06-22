<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Task;

class TaskList extends Component
{
    public $tasks;
    public $task = '';

    function mount() {
        $this->fetchTasks();
    }

    function fetchTasks() {
        $this->tasks = Task::all()->reverse();
    }

    function addTask() {
        if($this->task != ''){
            $task = new Task();
            $task->task = $this->task;
            $task->save();
            $this->task = '';
            $this->fetchTasks();
        }
    }

    function markAsDone(Task $task) {
        $task->status = 'done';
        $task->save();
        $this->fetchTasks();
    }

    public function render()
    {
        return view('livewire.task-list');
    }
}
