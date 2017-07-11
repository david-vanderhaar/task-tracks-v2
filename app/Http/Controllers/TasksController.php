<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Task;

class TasksController extends Controller
{
    public function index() {

        $tasks = Task::all();

        return view('tasks.index', compact('tasks'));
        // return view('tasks.components.newTaskForm', compact('tasks'));
    }

    public function show($id) {

        $task = Task::find($id);

        dd($task['task_name']. ' ' . $task['category_id']);

        return view('tasks.show', compact('task'));
    }

    //Inserting Tasks

    //Inserting Categories

    //Deleting Tasks

    //Deleting Categories
}
