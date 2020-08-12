@extends('layouts.todo')
@section('title', 'TODOリスト')
@section('content')
    <div class="container">
        <h1>TodoList</h1>
        <div class="status-form">
            <p>
                <input type="radio" class="search" id="all" data="" name="status" value="all" checked="checked">すべて
                <input type="radio" class="search" id="作業中" data="作業中" name="status" value="作業中">作業中
                <input type="radio" class="search" id="完了" data="完了" name="status" value="完了">完了
            </p>
        </div>
        <div class="list">
            <table>
                <tr>
                    <th>ID</th>
                    <th>コメント</th>
                    <th>状態</th>
                    <th>削除</th>
                </tr>
                @foreach ($tasks as $task)
                    <tr data-status="作業中">
                        <td>{{ $loop->index }}</td>
                        <td>{{ $task->task }}</td>
                        <td>
                            <input type="button" class="status-button" value="{{ $task->status }}">
                        </td>
                        <form action="{{ action('TodoController@delete') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $task->id }}">
                            <td><input type="submit" value="削除"></td>
                        </form>
                    </tr>
                @endforeach
            </table>
            <div class="task-form">
                <form action="{{ action('TodoController@add') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="status" value="作業中">
                    <label for="task">タスクを追加</label>
                    <input type="text" name="task">
                    <input type="submit">
                </form>
            </div>
        </div>
    </div>
@endsection
