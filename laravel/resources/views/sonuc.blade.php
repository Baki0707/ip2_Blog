<h1>Ortalamanız {{ $ortalama }}</h1>

@if ($gecti)
    <p style="color:green">Tebrikler! Geçtiniz!</p>
@else
    <p style="color:red">Ne yazık ki geçemediniz!</p>
@endif

<a href="/not">Tekrar Hesapla</a>
