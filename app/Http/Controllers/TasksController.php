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

    public function store(Request $request) {
        $task = new \App\Task();
        $task->title=$request->title;
        $task->weekly=$request->weekly;
        $task->isDone=0;
        $task->save();
        return \App\Task::all(); 
    }
}
