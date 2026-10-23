<h1>Not Hesaplama Formu</h1>

@if($errors->any())
    <p style="color: red">Lütfen geçerli değerler yazınız!</p>
@endif

<form method="POST" action="/not">
    @csrf
    Vize <input type="text" name="vize" value="{{ old('vize') }}" /><br>
    Final <input type="text" name="final" value="{{ old('final') }}" />
    <button>Hesapla</button>

</form>
