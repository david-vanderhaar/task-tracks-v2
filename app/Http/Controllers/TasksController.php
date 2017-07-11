<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Task;
use \App\Category;

class TasksController extends Controller
{
    public function index() {

        $tasks = Task::all();
        $categories = Category::all();

        //Date and Time
        $currentDate = date('Y-m-d');
        $currentTime = date('g:i a');

        return view('tasks.index', compact('tasks', 'categories', 'currentDate', 'currentTime'));
        // return view('tasks.components.newTaskForm', compact('tasks'));
    }

    public function show($id) {

        $task = Task::find($id);

        dd($task['task_name']. ' ' . $task['category_id']);

        return view('tasks.show', compact('task'));
    }

    //Inserting Tasks
    public function saveTask(Request $request) {
        
        $task = new Task;

        //Capture Date and Time
        $taskDateStart = $request->input('start_date');
        $taskTimeStart = $request->input('start_time');
        $taskDateEnd = $request->input('end_date');
        $taskTimeEnd = $request->input('end_time');

        $task->task_name = $request->input('task_name');
        $task->category_id = $request->input('category_id');
        $task->task_desc = $request->input('task_desc');
        //Combine Date and Time
        $task->task_start = $taskDateStart. ' ' . $taskTimeStart;
        $task->task_end = $taskDateEnd. ' ' . $taskTimeEnd;

        
        $task->save();

        return redirect('tasks');

    }
    //Inserting Categories

    //Deleting Tasks

    //Deleting Categories
}
