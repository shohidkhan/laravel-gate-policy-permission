<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //

    function index(){
         $tasks=Task::all();

         return view("task.index",compact("tasks"));
    }
    
    function create(Request $request){
        $this->authorize("create",Task::class);
        return view("task.create");
    }
    function store(Request $request){
        $this->authorize("create",Task::class);
        // return view("task.create");
    }
    function edit(Task $task){
        $this->authorize("update",$task);
        return view("task.edit");
    }

    function update(Task $task){
        $this->authorize("update",$task);
        // return view("task.edit");
    }

    
    function destory(Task $task){
        $this->authorize("delete",$task);
        $task->delete();
        return redirect()->back();
        // return view("task.edit");
    }
}
