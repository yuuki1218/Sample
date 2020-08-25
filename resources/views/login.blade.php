@extends('layouts.admin')
@section('title', 'ログイン画面')

@section('content')
    <h1>ログイン画面</h1>
    <div class="container">
        <form class="login-form">
            <table>
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
            </table>
            <div class="form-button">
                <input type="submit" value="ログイン">
            </div>
        </form>
    </div>
@endsection
