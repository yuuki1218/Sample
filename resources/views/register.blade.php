@extends('layouts.admin')
@section('title', '新規登録画面')

@section('content')
    <h1>新規登録画面</h1>
    <div class="container">
        <form action="{{ action('LoginController@register') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <table>
                <tr>
                    <td>
                        <label for="name">名前</label>
                        <input type="text" name="name">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="mail-address">メールアドレス</label>
                        <input type="text" name="mail-address">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="password">パスワード</label>
                        <input type="text" name="password">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="confirm-password">パスワード再確認</label>
                        <input type="text" name="confirm-password">
                    </td>
                </tr>
            </table>
            <div class="row">
                <input type="submit" value="登録">
            </div>
        </form>
    @endsection
