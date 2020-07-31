<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>新規登録画面</title>
</head>

<body>
    <h1>新規登録画面</h1>
    <div class="container">
        <form class="register-form">
            <table>
                <tr>
                    <td>
                        <div class="col">
                            <label for="name">名前</label>
                            <input type="text" name="name">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                    <div class="col">
                            <label for="mail-address">メールアドレス</label>
                            <input type="text" name="mail-address">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="col">
                            <label for="password">パスワード</label>
                            <input type="text" name="password">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="col">
                            <label for="confirm-password">パスワード再確認</label>
                            <input type="text" name="confirm-password">
                        </div>
                    </td>
                </tr>
            </table>
            <div class="col">
                <a type="submit" class="btn btn-primary" href="{{ action('LoginController@login') }}">登録</a>
            </div>
        </form>
</body>
</html>
