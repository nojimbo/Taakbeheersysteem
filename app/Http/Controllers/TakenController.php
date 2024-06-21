<?php

namespace App\Http\Controllers;

use App\Models\Tasks;
use GuzzleHttp\Promise\TaskQueueInterface;
use Illuminate\Http\Request;

class TakenController extends Controller
{
    public function createGet(Request $request)
    {
        
        
        // return view('create');
        return view('TaskControl.create', []);
    }

    public function createPost(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'notes' => 'required|string',
            'status' => 'required|string',
        ]);
        // Create task
        Tasks::create([
            "name" => $validatedData["name"],
            "description" => $validatedData["description"],
            "notes" => $validatedData["notes"],
            "status" => $validatedData["status"]
        ]);
        return redirect()->route('show')->with('success', 'Task created successfully');
    }

    public function show(Request $request)
    {
        // Show all tasks and filtered tasks
        $tasks = Tasks::all();
        // if () {
        //     $tasks = Tasks::where("taskName",$request->get("taskName"))
        //                 ->where("taskDescription",$request->get("taskDescription"))
        //                 ->where("taskStatus",$request->get("taskStatus"))
        //                 ->get();
        // }
        return view('TaskControl.show', [
            "tasks" => $tasks
        ]);
    }

    public function edit(Request $request)
    {
        // edit
        return view('TaskControl.edit', [        ]);
    }
}
