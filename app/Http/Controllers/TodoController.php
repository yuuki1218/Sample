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
        $article = Task::find($request->id);
        $article->delete();
        return redirect('todo');
    }
}
