<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Giriş Yap</title>
</head>
<body>
<h2>Admin Girişi</h2>

@if(session('hata'))
    <p style="color: red;">{{ session('hata') }}</p>
@endif

<form action="/login" method="POST">
    @csrf
    <p>Kullanıcı Adı: <br><input type="text" name="username" required></p>
    <p>Şifre: <br><input type="password" name="password" required></p>
    <button type="submit">Giriş Yap</button>
</form>
</body>
</html>
