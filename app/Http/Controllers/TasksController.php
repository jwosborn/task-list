<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use \App\Task;



class TasksController extends Controller
{

    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        return $this->fetchTasks();
    }

    public function fetchUser()
    {
        return Session::get('username');
    }

    public function fetchTasks() {
       return Task::where('created_by', $this->fetchUser())->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $task = new Task();
        $task->title=$request->title;
        $task->weekly=$request->weekly;
        $task->isDone=0;
        $task->edit=0;
        $task->created_by=$request->created_by;
        $task->save();
        return $this->fetchTasks(); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);
        $task->title=$request->title;
        $task->weekly=$request->weekly;
        $task->isDone=$request->isDone;
        $task->edit=0;
        $task->created_by=$request->created_by;
        $task->save();
        return $this->fetchTasks();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

 

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \App\Task::destroy($id);
        return $this->fetchTasks(); 
    }
}
