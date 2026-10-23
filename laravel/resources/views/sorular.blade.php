<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Tek Tek Soru Çözümü (10 Soru)</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, sans-serif; background: #eef2f7; padding: 30px; margin: 0; }
        .kapsayici { max-width: 750px; margin: 0 auto; background: #fff; border-radius: 12px; padding: 35px; box-shadow: 0 4px 20px rgba(0,0,0,0.08); }
        h1 { color: #1a73e8; border-bottom: 2px solid #e8eaed; padding-bottom: 12px; font-size: 22px; margin-top: 0; }

        .soru-karti { background: #fafafa; border: 1px solid #e0e0e0; border-radius: 10px; padding: 25px; margin-bottom: 25px; min-height: 220px; }
        .soru-sayac { font-size: 14px; font-weight: bold; color: #5f6368; margin-bottom: 8px; text-transform: uppercase; }
        .soru-metni { font-weight: 600; font-size: 18px; margin-bottom: 20px; color: #202124; line-height: 1.5; }

        .secenek { display: block; margin: 12px 0; cursor: pointer; font-size: 16px; padding: 10px 14px; background: #fff; border: 1px solid #dadce0; border-radius: 8px; transition: 0.2s; }
        .secenek:hover { background: #f1f3f4; }
        .secenek input { margin-right: 12px; transform: scale(1.2); }

        .buton-grubu { display: flex; justify-content: space-between; align-items: center; margin-top: 20px; }
        .btn { border: none; padding: 12px 24px; font-size: 15px; font-weight: bold; border-radius: 6px; cursor: pointer; transition: 0.2s; }
        .btn-ileri { background: #1a73e8; color: white; margin-left: auto; }
        .btn-ileri:hover { background: #1557b0; }
        .btn-geri { background: #dadce0; color: #3c4043; }
        .btn-geri:hover { background: #bdc1c6; }
        .btn-bitir { background: #e37400; color: white; display: none; margin-left: auto; }
        .btn-bitir:hover { background: #b05a00; }

        /* Sonuç Paneli */
        .sonuc-kutusu { background: #e8f0fe; border-left: 6px solid #1a73e8; padding: 25px; border-radius: 8px; margin-bottom: 25px; }
        .sonuc-puan { font-size: 32px; font-weight: bold; color: #1a73e8; margin-bottom: 15px; }
        .dogru { color: #188038; font-weight: bold; font-size: 18px; }
        .yanlis { color: #d93025; font-weight: bold; font-size: 18px; }
        .btn-yeniden { display: inline-block; background: #34a853; color: white; padding: 12px 24px; border-radius: 6px; text-decoration: none; font-weight: bold; margin-top: 20px; }
    </style>
</head>
<body>

<div class="kapsayici">
    @if(isset($sonuc))
        {{-- Sonuç Ekranı --}}
        <div class="sonuc-kutusu">
            <div class="sonuc-puan">Toplam Puan: {{ $sonuc['puan'] }} / 100</div>
            <p>Doğru Sayısı: <span class="dogru">{{ $sonuc['dogru'] }}</span></p>
            <p>Yanlış Sayısı: <span class="yanlis">{{ $sonuc['yanlis'] }}</span></p>
            <p>Boş Sayısı: <strong>{{ $sonuc['bos'] }}</strong></p>
            <a href="{{ url('/c1/action4') }}" class="btn-yeniden">🔄 Yeni Sınava Başla</a>
        </div>

        <h2>Yanlış Yapılan Sorular</h2>

        @php $yanlisVarMi = false; @endphp

        @foreach($sorular as $id => $item)
            @php
                $verilenCevap = $sonuc['kullaniciCevaplari'][$id] ?? null;
            @endphp

            {{-- Yalnızca verilen cevap doğru cevaba eşit değilse ekrana bas --}}
            @if($verilenCevap !== $item['dogru'])
                @php $yanlisVarMi = true; @endphp
                <div class="soru-karti">
                    <div class="soru-metni">{{ $item['soru'] }}</div>
                    <p>Verdiğin Cevap: <span class="yanlis">{{ $verilenCevap ?? 'Boş Bırakıldı' }}</span></p>
                    <p>Doğru Cevap: <span class="dogru">{{ $item['dogru'] }}</span></p>
                </div>
            @endif
        @endforeach

        @if(!$yanlisVarMi)
            <div style="background: #e6f4ea; color: #137333; padding: 15px; border-radius: 8px; font-weight: bold;">
                Tebrikler! Hiç yanlışınız yok, tüm soruları doğru cevapladınız.
            </div>
        @endif
    @else
        {{-- Sınav Ekranı (Sorular Tek Tek Gelir) --}}
        <h1>Genel Kültür Testi</h1>

        <form id="quizForm" action="{{ url('/c1/sinav-degerlendir') }}" method="POST">
            @csrf

            @php $index = 0; @endphp
            @foreach($sorular as $id => $item)
                <div class="soru-adimi" id="soru-{{ $index }}" style="{{ $index === 0 ? '' : 'display: none;' }}">
                    <div class="soru-karti">
                        <div class="soru-sayac">Soru {{ $index + 1 }} / {{ count($sorular) }} (Havuz ID: #{{ $id }})</div>
                        <div class="soru-metni">{{ $item['soru'] }}</div>

                        @foreach($item['siklar'] as $harf => $metin)
                            <label class="secenek">
                                <input type="radio" name="cevaplar[{{ $id }}]" value="{{ $harf }}">
                                <strong>{{ $harf }})</strong> {{ $metin }}
                            </label>
                        @endforeach
                    </div>
                </div>
                @php $index++; @endphp
            @endforeach

            <div class="buton-grubu">
                <button type="button" class="btn btn-geri" id="btnGeri" onclick="oncekiSoru()" style="display: none;">⬅ Önceki Soru</button>
                <button type="button" class="btn btn-ileri" id="btnIleri" onclick="sonrakiSoru()">Sonraki Soru ➡</button>
                <button type="submit" class="btn btn-bitir" id="btnBitir">✅ Sınavı Bitir ve Puanla</button>
            </div>
        </form>
    @endif
</div>

<script>
    let aktifIndex = 0;
    const toplamSoru = {{ isset($sorular) ? count($sorular) : 0 }};

    function guncelleGorunum() {
        // Tüm soruları gizle
        for (let i = 0; i < toplamSoru; i++) {
            const el = document.getElementById('soru-' + i);
            if (el) el.style.display = 'none';
        }

        // Sadece aktif soruyu göster
        const aktifEl = document.getElementById('soru-' + aktifIndex);
        if (aktifEl) aktifEl.style.display = 'block';

        // Geri butonunu ilk soruda gizle
        document.getElementById('btnGeri').style.display = (aktifIndex === 0) ? 'none' : 'block';

        // Son sorudaysa İleri butonunu gizle, Bitir butonunu göster
        if (aktifIndex === toplamSoru - 1) {
            document.getElementById('btnIleri').style.display = 'none';
            document.getElementById('btnBitir').style.display = 'block';
        } else {
            document.getElementById('btnIleri').style.display = 'block';
            document.getElementById('btnBitir').style.display = 'none';
        }
    }

    function sonrakiSoru() {
        if (aktifIndex < toplamSoru - 1) {
            aktifIndex++;
            guncelleGorunum();
        }
    }

    function oncekiSoru() {
        if (aktifIndex > 0) {
            aktifIndex--;
            guncelleGorunum();
        }
    }
</script>

</body>
</html>
