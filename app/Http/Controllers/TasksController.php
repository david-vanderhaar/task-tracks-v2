<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Task;
use \App\Category;
use \Carbon\Carbon;
use \DateTime;

class TasksController extends Controller
{
    public function index() {

        $tasks = Task::all();
        $categories = Category::all();

        //Date and Time
        date_default_timezone_set('America/Louisville');
        // $currentDate = Carbon::now()
        $currentDate = date('j F, Y');
        $currentTime = date('g:iA');

        return view('tasks.index', compact('tasks', 'categories', 'currentDate', 'currentTime'));
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
        //Combine Date and Time
        $startTask = $taskDateStart . ' ' . $taskTimeStart;
        $endTask = $taskDateEnd . ' ' . $taskTimeEnd;
        if ($taskDateEnd != null and $taskTimeEnd != null) {
            $durDays = Carbon::createFromFormat('j F, Y g:iA', $endTask)->day - (Carbon::createFromFormat('j F, Y g:iA', $startTask)->day);
            $durHours = Carbon::createFromFormat('j F, Y g:iA', $endTask)->hour - (Carbon::createFromFormat('j F, Y g:iA', $startTask)->hour);
            $durMin = Carbon::createFromFormat('j F, Y g:iA', $endTask)->minute - (Carbon::createFromFormat('j F, Y g:iA', $startTask)->minute);
            //Calulate Duration
            $task->task_dur = ($durDays * 24) + $durHours + ($durMin/60);
        }

        $task->task_start = $startTask;
        $task->task_end = $endTask;
        $task->task_name = $request->input('task_name');
        $task->category_id = $request->input('category_id');
        $task->task_desc = $request->input('task_desc');


        $task->save();

        // Task::create(request(['task_name', 'task_desc', 'task_start', 'task_end', 'task_dur', 'category_id']));

        return redirect('tasks');

    }
    //Inserting Categories

    //Deleting Tasks

    //Deleting Categories
}
