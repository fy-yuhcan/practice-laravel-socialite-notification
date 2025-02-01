<!-- resources/views/login.blade.php -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ログイン</title>
</head>
<body>
    <h1>ログイン画面</h1>
    <!-- Google認証用のリンク。ここでは"google"プロバイダーを利用 -->
    <a href="{{ url('/redirect/google') }}">Googleでログイン</a>
</body>
</html>
