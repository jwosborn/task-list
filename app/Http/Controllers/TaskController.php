<?php

namespace App\Http\Controllers;
use \App\Task;
use Session;


use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function fetchUser()
    {
        return Session::get('username');
    }

    public function fetchTasks() {
       return Task::where('created_by', $this->fetchUser())->get();
    }

    public function toggleComplete(Request $request, $id)
    {
        $task = Task::findOrFail($id);
        $task->title=$request->title;
        $task->isDone=!$request->isDone;
        $task->edit=0;
        $task->created_by=$request->created_by;
        $task->save();
        return $this->fetchTasks();  
    }
}
