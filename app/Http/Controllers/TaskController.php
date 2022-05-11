<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return view('index', [
            'tasks' => \App\Models\Task::all(),
        ]);
    }

    public function show($id){
        $task = \App\Models\Task::findOrFail($id);
        if (!$task) {
            abort(404);
        }

        return view('tasks', [
            'tasks' => $task
        ]);
    }

    public function delete($id){
        $taskdelete = \App\Models\Task::find($id);
        $taskdelete->delete();

        return view('deletedTasks', [
            'deletedTasks' => $taskdelete
        ]);
    }

    public function indexOrdered(){
        
        $tasksordered = \App\Models\Task::orderBy('title','asc')->get();

        return view('index_bis', [
            'index_bis' => $tasksordered
        ]);
    }

}
