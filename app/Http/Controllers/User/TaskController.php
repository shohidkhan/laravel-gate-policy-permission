<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    //

    function index(){
        // $tasks=auth()->user()->tasks;
        $tasks=Task::where("user_id",Auth::id())->get();
        return view("task.user_index",compact("tasks"));
    }
}
