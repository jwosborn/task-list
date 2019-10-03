<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index() {
        return view ('index');
    }

    public function get() {
        return \App\Task::all();
    }

    public function store(Request $request) {
        $task = new \App\Task();
        $task->title=$request->title;
        $task->weekly=$request->weekly;
        $task->isDone=0;
        $task->save();
        return \App\Task::all(); 
    }

    public function delete($id) {
        \App\Task::destroy($id);
        return \App\Task::all(); 
    }
}
