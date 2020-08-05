@extends('layouts.sample')
@section('title', 'TODOリスト')
@section('content')
    <div class="container">
        <h1>TodoList</h1>
        <div class="status-form">
            <p>
                <input type="radio" name="status" value="1" checked="checked">すべて
                <input type="radio" name="status" value="2">作業中
                <input type="radio" name="status" value="3">完了
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
                @foreach ($tasks as $to)
                    <tr>
                        <td>{{ $loop->index }}</td>
                        <td>{{ $to->to }}</td>
                        <td><input type="submit" value="{{ $to->status }}"></td>
                        <form action="{{ action('TodoController@delete') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $to->id }}">
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
