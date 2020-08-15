<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Http\Requests\TaskRules;
use Illuminate\Support\Facades\DB;
use App\Enums\TaskStatus;
use Illuminate\Support\Facades\Redis;

use function GuzzleHttp\Promise\all;

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
        $task->status ? $task->update(['status' => 0]): $task->update(['status' => 1]) ;
        return redirect('todo');
    }
    public function showStatus(Request $request)
    {
        $val = $request->input('status');
        if ($val == TaskStatus::Finish) {
            $tasks = DB::table('tasks')->where('status', '完了')->get();
        } elseif ($val == TaskStatus::Moving) {
            $tasks = DB::table('tasks')->where('status', '作業中')->get();
        } else {
            $tasks = DB::table('tasks')->get();
        }
        return view('todo', ['tasks' => $tasks]);
    }
}
