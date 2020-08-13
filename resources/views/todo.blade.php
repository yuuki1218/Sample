@extends('layouts.todo')
@section('title', 'TODOリスト')
@section('content')
    <div class="container">
        <h1>TodoList</h1>
        <div class="status-form">
            <p>
            <form action="{{ action('TodoController@showStatus') }}" method="GET">
                @csrf
                <button type="radio" class="search" name="status" value="all" checked="checked">すべて</button>
                <button type="radio" class="search" name="status" value="作業中">作業中</button>
                <button type="radio" class="search" name="status" value="完了">完了</button>
            </form>
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
                        <form action="{{ action('TodoController@update', ['id' => $task->id]) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <td>
                                <input type="hidden" name="_method" value="PATCH">
                                <input type="submit" class="status-button" value="{{ $task->status }}">
                            </td>
                        </form>
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
