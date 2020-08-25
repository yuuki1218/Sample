@extends('layouts.admin')
@section('title', '新規登録画面')

@section('content')
    <h1>新規登録画面</h1>
    <div class="container">
        <form action="register" method="POST" enctype="multipart/form-data">
            @csrf
            @if (count($errors) > 0)
                <ul>
                    @foreach ($errors->all() as $e)
                        <li>{{ $e }}</li>
                    @endforeach
                </ul>
            @endif
            <table>
                <tr>
                    <th>
                        <label for="name">名前</label>
                    </th>
                    <td>
                        <input type="text" name="name">
                    </td>
                </tr>
                <tr>
                    <th>
                        <label for="mail-address">メールアドレス</label>
                    </th>
                    <td>
                        <input type="text" name="mail-address">
                    </td>
                </tr>
                <tr>
                    <th>
                        <label for="password">パスワード</label>
                    </th>
                    <td>
                        <input type="text" name="password">
                    </td>
                </tr>
                <tr>
                    <th>
                        <label for="password_confirmation">パスワード再確認</label>
                    </th>
                    <td>
                        <input type="text" name="password_confirmation">
                    </td>
                </tr>
            </table>
            <div class="form-button">
                <input type="submit" value="登録">
            </div>
        </form>
    @endsection
