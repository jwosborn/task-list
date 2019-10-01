<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index() {
    $tasks = \App\Task::all();
    return $tasks;
    }
}
