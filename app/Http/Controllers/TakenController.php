<?php

namespace App\Http\Controllers;

use App\Models\Tasks;
use GuzzleHttp\Promise\TaskQueueInterface;
use Illuminate\Http\Request;

class TakenController extends Controller
{
    public function index(Request $request)
    {
        // Read
        return response()->json($tasks);
    }

    public function create(Request $request)
    {
        // Create task
        $task = Tasks::create([
            "taskName" => $request->get("taskName"),
            "taskDescription" => $request->get("taskDescription"),
            "taskStatus" => $request->get("taskStatus")
        ]);
        // return view('create');
        return view('create', [
            "task" => $task 
        ]);
    }

    public function show(Request $request)
    {
        // Read
        $tasks = Tasks::where("taskName",$request->get("taskName"))
                        ->where("taskDescription",$request->get("taskDescription"))
                        ->where("taskStatus",$request->get("taskStatus"))
                        ->get();
        return response()->json($tasks);
    }

    public function edit(Request $request)
    {
        // edit
        return response()->json($tasks);
    }
}
