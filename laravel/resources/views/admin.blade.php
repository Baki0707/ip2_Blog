<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Admin Paneli</title>
</head>
<body>
<h2>Admin Paneli</h2>
<p><a href="/">Siteye Dön</a> | <a href="/logout">Çıkış Yap</a></p>
<hr>

<h3>Yeni Haber Ekle</h3>
<form action="/admin/ekle" method="POST">
    @csrf
    <p>Başlık:<br><input type="text" name="title" required></p>
    <p>Özet:<br><textarea name="summary"></textarea></p>
    <p>İçerik:<br><textarea name="content" required></textarea></p>
    <button type="submit">Haber Ekle</button>
</form>

<hr>
<h3>Ekli Haberler</h3>
<ul>
    @foreach($haberler as $item)
        <li style="margin-bottom: 10px;">
            {{ $item->title }}
            <a href="/admin/sil/{{ $item->id }}" onclick="return confirm('Silmek istediğine emin misin?')" style="color: red; margin-left: 10px;">[Sil]</a>
        </li>
    @endforeach
</ul>
</body>
</html>
