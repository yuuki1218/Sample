<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Http\Requests\TaskRules;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('todo', ['tasks' => $tasks]);
    }
    public function add(TaskRules $request)
    {
        $task = new Task();
        $task->task = $request->input('task');
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
        $isStatus = $task->status;
        $task->status = !$isStatus;
        $task->update();
        return redirect('todo');
    }
    public function showStatus(Request $request)
    {
        $val = $request->input('status');
        if ($val == 0) {
            $tasks = DB::table('tasks')->where('status', 0)->get();
        } elseif ($val == 1) {
            $tasks = DB::table('tasks')->where('status', 1)->get();
        } else {
            $tasks = DB::table('tasks')->get();
        }
        return view('todo', ['tasks' => $tasks]);
    }
}
