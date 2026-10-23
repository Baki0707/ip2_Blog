<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Blog Ana Sayfa</title>
</head>
<body>
<h1>Haberler</h1>

<p>
    <a href="/">Ana Sayfa</a> |
    @if(session('giris_yapildi'))
        <a href="/admin">Yönetim Paneli</a> |
        <a href="/logout">Çıkış Yap</a>
    @else
        <a href="/login">Giriş Yap</a>
    @endif
</p>
<hr>

@foreach($haberler as $item)
    <div style="border: 1px solid #aaa; padding: 10px; margin-bottom: 10px;">
        <h3>{{ $item->title }}</h3>
        <p>{{ $item->summary }}</p>
        <a href="/haber/{{ $item->id }}">Haberin Detayına Git</a>
    </div>
@endforeach
</body>
</html>
