<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //

    function index(){
        $tasks=Task::all();

        return view("task.admin_index",compact("tasks"));
    }
}
