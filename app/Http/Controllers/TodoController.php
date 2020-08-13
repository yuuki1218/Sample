<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TodoController extends Controller
{
    public function show()
    {
        $tasks = Task::all();
        return view('todo', ['tasks' => $tasks]);
    }
    public function add(Request $request)
    {
        $task = new Task();
        $task->to = $request->input('task');
        $task->status = $request->input('status');
        $task->save();
        return redirect('todo');
    }
    public function delete(Request $request)
    {
        $task = Task::find($request->id);
        $task->delete();
        return redirect('todo');
    }
    public function update($id)
    {
        $task = Task::findOrFail($id);
        if ($task->status == "作業中") {
            $task->update(['status' => '完了']);
            $task->save();
        } else {
            $task->update(['status' => '作業中']);
            $task->save();
        }
        return redirect('todo');
    }
}
