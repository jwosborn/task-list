<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index() {
        return view ('index');
    }

    public function get() {
        $tasks = \App\Task::all();
        return $tasks;
    }

    public function store(Request $task) {
        $task = new App/Task ();
        $task->title=$request->title;
        $task->weekly=$request->weekly;
        $task->save();
        return $task; 
    }
}
