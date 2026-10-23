<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ $haber->title }}</title>
</head>
<body>
<a href="/">&larr; Geri Dön</a>
<hr>
<h2>{{ $haber->title }}</h2>
<p><small>Tarih: {{ $haber->created_at }}</small></p>
<div style="margin-top: 15px; line-height: 1.6;">
    {{ $haber->content }}
</div>
</body>
</html>
