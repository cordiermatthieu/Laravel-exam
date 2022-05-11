<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskDeleteController extends Controller
{
    //
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
        \App\Models\Task::find($id)->delete();

        return redirect('/');
    }


}
