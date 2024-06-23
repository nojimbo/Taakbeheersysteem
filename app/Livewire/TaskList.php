<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class TaskList extends Component
{
    public $tasks;
    public $task = '';
    public $description = '';
    public $notes = '';
    public $status = '';

    function mount() {
        $this->fetchTasks();
    }

    function fetchTasks() {
        $this->tasks = auth()->user()->tasks;
    }

    function addTask() {
        if($this->task != ''){
            $task = new Task();
            $task->user_id = Auth::id();
            $task->task = $this->task;
            $task->description = $this->description;
            $task->notes = $this->notes;
            // $task->status = $this->status;
            $task->save();
            $this->task = '';
            $this->description = '';
            $this->notes = '';
            // $this->status = '';
            $this->fetchTasks();
        }   //have to refresh after the for the tasks after the first one to show up, but after refreshing the page it updates immediatly.
    }

    function deleteTask(Task $task) {
        $task->delete();
        $this->fetchTasks();
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
