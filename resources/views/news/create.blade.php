@extends('layouts.news')
@section('title', '投稿一覧')
@section('content')
    <div class="container">
        <form action="{{ action('NewsController@store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" id="name" name="name" value="{{ Auth::user()->name }}">
            <div class="form-area">
                <div class="form-control">
                    <label for="title">タイトル</label>
                    <input type="text" id="title" name="title" value="{{ old('title') }}">
                </div>
                <div class="form-control">
                    <label for="body">コンテンツ</label>
                    <textarea type="text" id="body" name="body" rows="20">{{ old('body') }}</textarea>
                </div>
                <div class="form-button">
                    <input type="submit" value="新規投稿">
                </div>
            </div>
        </form>
    </div>
@endsection
