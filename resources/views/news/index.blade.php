@extends('layouts.news')
@section('title', '投稿一覧')
@section('content')
    <div class="container">
        <div class="col-md-10">
            <div class="news-area">
                @foreach ($posts as $post)
                    <div class="title-area">
                        <h2>{{ $post->title }}</h2>
                    </div>
                    <div class="body-area">
                        <p>{{ $post->body }}</p>
                    </div>
                    <hr>
                    <div class="author-area">
                        <div class="author-item">
                            <p class="author">投稿者:{{ $post->name }}</p>
                        </div>
                        @guest
                        @else
                            @if ($post->user_id === Auth::user()->id)
                                <div class="author-item">
                                    <form action="{{ action('NewsController@edit', ['id' => $post->id]) }}" metod="GET">
                                        <input class="edit-button" type="submit" value="編集">
                                    </form>
                                </div>
                                <div class="author-item">
                                    <form action="{{ action('NewsController@delete') }}" method="POST">
                                        <input class="delete-button" type="submit" value="削除">
                                    </form>
                                </div>
                            @endif
                        @endguest
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
