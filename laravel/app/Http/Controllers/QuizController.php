<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    private function soruHavuzunuGetir()
    {
        return [
            1 => ['soru' => 'Türkiye\'nin başkenti neresidir?', 'siklar' => ['A' => 'İstanbul', 'B' => 'Ankara', 'C' => 'İzmir', 'D' => 'Bursa'], 'dogru' => 'B'],
            2 => ['soru' => 'Güneş sistemindeki en büyük gezegen hangisidir?', 'siklar' => ['A' => 'Mars', 'B' => 'Venüs', 'C' => 'Jüpiter', 'D' => 'Satürn'], 'dogru' => 'C'],
            3 => ['soru' => 'Türkiye Cumhuriyeti hangi yılda ilan edilmiştir?', 'siklar' => ['A' => '1920', 'B' => '1921', 'C' => '1922', 'D' => '1923'], 'dogru' => 'D'],
            4 => ['soru' => 'Suyun donma noktası kaç santigrat derecedir?', 'siklar' => ['A' => '0', 'B' => '-4', 'C' => '4', 'D' => '-10'], 'dogru' => 'A'],
            5 => ['soru' => 'Mona Lisa tablosunu kim yapmıştır?', 'siklar' => ['A' => 'Picasso', 'B' => 'Leonardo da Vinci', 'C' => 'Michelangelo', 'D' => 'Van Gogh'], 'dogru' => 'B'],
            6 => ['soru' => 'İstiklal Marşı\'nın şairi kimdir?', 'siklar' => ['A' => 'Mehmet Akif Ersoy', 'B' => 'Namık Kemal', 'C' => 'Ziya Gökalp', 'D' => 'Yahya Kemal'], 'dogru' => 'A'],
            7 => ['soru' => 'Futbolda bir takım sahada kaç kişiyle mücadele eder?', 'siklar' => ['A' => '9', 'B' => '10', 'C' => '11', 'D' => '12'], 'dogru' => 'C'],
            8 => ['soru' => 'Türkiye\'nin yüzölçümü en büyük gölü hangisidir?', 'siklar' => ['A' => 'Tuz Gölü', 'B' => 'Beyşehir Gölü', 'C' => 'İznik Gölü', 'D' => 'Van Gölü'], 'dogru' => 'D'],
            9 => ['soru' => 'Yer çekimi kanununu sistemleştiren bilim insanı kimdir?', 'siklar' => ['A' => 'Isaac Newton', 'B' => 'Albert Einstein', 'C' => 'Galileo Galilei', 'D' => 'Nikola Tesla'], 'dogru' => 'A'],
            10 => ['soru' => 'Japonya\'nın başkenti neresidir?', 'siklar' => ['A' => 'Seul', 'B' => 'Pekin', 'C' => 'Tokyo', 'D' => 'Kyoto'], 'dogru' => 'C'],
            11 => ['soru' => 'Oksijenin kimyasal simgesi nedir?', 'siklar' => ['A' => 'Ox', 'B' => 'O', 'C' => 'Ok', 'D' => 'Og'], 'dogru' => 'B'],
            12 => ['soru' => 'İstanbul hangi yıl fethedilmiştir?', 'siklar' => ['A' => '1071', 'B' => '1299', 'C' => '1453', 'D' => '1517'], 'dogru' => 'C'],
            13 => ['soru' => 'Bir üçgenin iç açıları toplamı kaç derecedir?', 'siklar' => ['A' => '90', 'B' => '180', 'C' => '270', 'D' => '360'], 'dogru' => 'B'],
            14 => ['soru' => 'Pusulada "K" (veya N) harfi hangi yönü gösterir?', 'siklar' => ['A' => 'Kuzey', 'B' => 'Güney', 'C' => 'Doğu', 'D' => 'Batı'], 'dogru' => 'A'],
            15 => ['soru' => 'İtalya\'nın başkenti neresidir?', 'siklar' => ['A' => 'Milano', 'B' => 'Venedik', 'C' => 'Roma', 'D' => 'Napoli'], 'dogru' => 'C'],
            16 => ['soru' => 'Bir yılda kaç hafta vardır?', 'siklar' => ['A' => '48', 'B' => '50', 'C' => '52', 'D' => '54'], 'dogru' => 'C'],
            17 => ['soru' => 'Çanakkale Zaferi hangi gün anılır?', 'siklar' => ['A' => '18 Mart', 'B' => '23 Nisan', 'C' => '19 Mayıs', 'D' => '29 Ekim'], 'dogru' => 'A'],
            18 => ['soru' => 'Satranç tahtasında toplam kaç kare vardır?', 'siklar' => ['A' => '32', 'B' => '48', 'C' => '64', 'D' => '100'], 'dogru' => 'C'],
            19 => ['soru' => 'Gökkuşağında kaç ana renk bulunur?', 'siklar' => ['A' => '5', 'B' => '6', 'C' => '7', 'D' => '8'], 'dogru' => 'C'],
            20 => ['soru' => 'Altının periyodik cetveldeki simgesi nedir?', 'siklar' => ['A' => 'Al', 'B' => 'Au', 'C' => 'Ag', 'D' => 'At'], 'dogru' => 'B'],
            21 => ['soru' => 'Dünya\'nın doğal uydusu nedir?', 'siklar' => ['A' => 'Ay', 'B' => 'Güneş', 'C' => 'Mars', 'D' => 'Kutup Yıldızı'], 'dogru' => 'A'],
            22 => ['soru' => 'Türkiye\'nin en yüksek dağı hangisidir?', 'siklar' => ['A' => 'Erciyes', 'B' => 'Ağrı Dağı', 'C' => 'Süphan', 'D' => 'Kaçkar'], 'dogru' => 'B'],
            23 => ['soru' => 'Avustralya\'nın başkenti neresidir?', 'siklar' => ['A' => 'Sidney', 'B' => 'Melbourne', 'C' => 'Kanberra', 'D' => 'Brisbane'], 'dogru' => 'C'],
            24 => ['soru' => 'Telefonu icat eden kimdir?', 'siklar' => ['A' => 'Alexander Graham Bell', 'B' => 'Thomas Edison', 'C' => 'Nikola Tesla', 'D' => 'Samuel Morse'], 'dogru' => 'A'],
            25 => ['soru' => 'Vücuda kan pompalayan ana organ hangisidir?', 'siklar' => ['A' => 'Karaciğer', 'B' => 'Akciğer', 'C' => 'Kalp', 'D' => 'Böbrek'], 'dogru' => 'C'],
            26 => ['soru' => 'Brezilya hangi kıtadadır?', 'siklar' => ['A' => 'Kuzey Amerika', 'B' => 'Güney Amerika', 'C' => 'Afrika', 'D' => 'Asya'], 'dogru' => 'B'],
            27 => ['soru' => 'Ampulü kim icat etmiştir?', 'siklar' => ['A' => 'Thomas Edison', 'B' => 'Nikola Tesla', 'C' => 'Albert Einstein', 'D' => 'James Watt'], 'dogru' => 'A'],
            28 => ['soru' => 'Almanya\'nın başkenti neresidir?', 'siklar' => ['A' => 'Münih', 'B' => 'Frankfurt', 'C' => 'Berlin', 'D' => 'Hamburg'], 'dogru' => 'C'],
            29 => ['soru' => 'İlk kadın savaş pilotumuz kimdir?', 'siklar' => ['A' => 'Sabiha Gökçen', 'B' => 'Afife Jale', 'C' => 'Halide Edib Adıvar', 'D' => 'Satı Kadın'], 'dogru' => 'A'],
            30 => ['soru' => 'Bir futbol maçı normal sürede kaç dakikadır?', 'siklar' => ['A' => '80', 'B' => '90', 'C' => '100', 'D' => '120'], 'dogru' => 'B'],
            31 => ['soru' => 'İnsanda normalde kaç kromozom bulunur?', 'siklar' => ['A' => '23', 'B' => '44', 'C' => '46', 'D' => '48'], 'dogru' => 'C'],
            32 => ['soru' => 'Güneş sistemi hangi galakside yer alır?', 'siklar' => ['A' => 'Andromeda', 'B' => 'Samanyolu', 'C' => 'Kara Göz', 'D' => 'Üçgen'], 'dogru' => 'B'],
            33 => ['soru' => 'Gümüşün kimyasal simgesi nedir?', 'siklar' => ['A' => 'Gm', 'B' => 'Au', 'C' => 'Ag', 'D' => 'Gs'], 'dogru' => 'C'],
            34 => ['soru' => 'Fransa\'nın başkenti neresidir?', 'siklar' => ['A' => 'Lyon', 'B' => 'Marsilya', 'C' => 'Paris', 'D' => 'Nice'], 'dogru' => 'C'],
            35 => ['soru' => 'Hücrenin enerji santrali olarak bilinen organel hangisidir?', 'siklar' => ['A' => 'Ribozom', 'B' => 'Mitokondri', 'C' => 'Lizozom', 'D' => 'Golgi'], 'dogru' => 'B'],
            36 => ['soru' => 'Kızıl Gezegen olarak bilinen gezegen hangisidir?', 'siklar' => ['A' => 'Mars', 'B' => 'Merkür', 'C' => 'Venüs', 'D' => 'Plüton'], 'dogru' => 'A'],
            37 => ['soru' => 'Dünyanın en büyük okyanusu hangisidir?', 'siklar' => ['A' => 'Atlas Okyanusu', 'B' => 'Hint Okyanusu', 'C' => 'Büyük Okyanus (Pasifik)', 'D' => 'Kuzey Buz Okyanusu'], 'dogru' => 'C'],
            38 => ['soru' => 'Bir saatte kaç saniye vardır?', 'siklar' => ['A' => '60', 'B' => '600', 'C' => '3600', 'D' => '86400'], 'dogru' => 'C'],
            39 => ['soru' => 'Helyumun kimyasal simgesi nedir?', 'siklar' => ['A' => 'H', 'B' => 'He', 'C' => 'Hl', 'D' => 'Hy'], 'dogru' => 'B'],
            40 => ['soru' => 'Basketbolda sahada bir takımdan kaç oyuncu yer alır?', 'siklar' => ['A' => '4', 'B' => '5', 'C' => '6', 'D' => '7'], 'dogru' => 'B'],
            41 => ['soru' => 'Suyun kaynama noktası deniz seviyesinde kaç derecedir?', 'siklar' => ['A' => '90', 'B' => '100', 'C' => '110', 'D' => '120'], 'dogru' => 'B'],
            42 => ['soru' => 'Türkiye\'nin sınırları içindeki en uzun nehir hangisidir?', 'siklar' => ['A' => 'Fırat', 'B' => 'Dicle', 'C' => 'Kızılırmak', 'D' => 'Sakarya'], 'dogru' => 'C'],
            43 => ['soru' => 'Anıtkabir hangi ilimizdedir?', 'siklar' => ['A' => 'İstanbul', 'B' => 'İzmir', 'C' => 'Ankara', 'D' => 'Samsun'], 'dogru' => 'C'],
            44 => ['soru' => 'Mimar Sinan\'ın "Ustalık eserim" dediği yapı hangisidir?', 'siklar' => ['A' => 'Süleymaniye Camii', 'B' => 'Selimiye Camii', 'C' => 'Şehzade Camii', 'D' => 'Mihrimah Sultan Camii'], 'dogru' => 'B'],
            45 => ['soru' => 'Voleybolda bir takım sahada kaç oyuncuyla yer alır?', 'siklar' => ['A' => '5', 'B' => '6', 'C' => '7', 'D' => '8'], 'dogru' => 'B'],
            46 => ['soru' => 'Yunanistan\'ın başkenti neresidir?', 'siklar' => ['A' => 'Selanik', 'B' => 'Atina', 'C' => 'Patras', 'D' => 'Girit'], 'dogru' => 'B'],
            47 => ['soru' => 'Gözün renkli kısmına ne ad verilir?', 'siklar' => ['A' => 'Retina', 'B' => 'Kornea', 'C' => 'İris', 'D' => 'Gözbebeği'], 'dogru' => 'C'],
            48 => ['soru' => 'Türkiye Cumhuriyeti\'nin ilk Cumhurbaşkanı kimdir?', 'siklar' => ['A' => 'İsmet İnönü', 'B' => 'Mustafa Kemal Atatürk', 'C' => 'Celal Bayar', 'D' => 'Fevzi Çakmak'], 'dogru' => 'B'],
            49 => ['soru' => 'Bir deste kaç adettir?', 'siklar' => ['A' => '10', 'B' => '12', 'C' => '15', 'D' => '20'], 'dogru' => 'A'],
            50 => ['soru' => 'Bir düzine kaç adettir?', 'siklar' => ['A' => '10', 'B' => '12', 'C' => '15', 'D' => '20'], 'dogru' => 'B'],
            51 => ['soru' => 'Güneş\'e en yakın gezegen hangisidir?', 'siklar' => ['A' => 'Venüs', 'B' => 'Merkür', 'C' => 'Mars', 'D' => 'Dünya'], 'dogru' => 'B'],
            52 => ['soru' => 'Kanı filtreleyip idrar oluşturan organ hangisidir?', 'siklar' => ['A' => 'Kalp', 'B' => 'Mide', 'C' => 'Böbrek', 'D' => 'Dalak'], 'dogru' => 'C'],
            53 => ['soru' => 'Osmanlı Devleti\'nin kurucusu kimdir?', 'siklar' => ['A' => 'Orhan Gazi', 'B' => 'Osman Bey', 'C' => 'Ertuğrul Gazi', 'D' => 'I. Murad'], 'dogru' => 'B'],
            54 => ['soru' => 'Dünyanın en küçük bağımsız devleti hangisidir?', 'siklar' => ['A' => 'Monako', 'B' => 'San Marino', 'C' => 'Vatikan', 'D' => 'Liechtenstein'], 'dogru' => 'C'],
            55 => ['soru' => 'İngiltere\'nin başkenti neresidir?', 'siklar' => ['A' => 'Manchester', 'B' => 'Liverpool', 'C' => 'Londra', 'D' => 'Birmingham'], 'dogru' => 'C'],
            56 => ['soru' => 'Türkiye kaç coğrafi bölgeye ayrılmıştır?', 'siklar' => ['A' => '5', 'B' => '6', 'C' => '7', 'D' => '8'], 'dogru' => 'C'],
            57 => ['soru' => 'Demirin periyodik cetveldeki simgesi nedir?', 'siklar' => ['A' => 'De', 'B' => 'Fe', 'C' => 'Ir', 'D' => 'Fm'], 'dogru' => 'B'],
            58 => ['soru' => 'Dünya\'nın kendi ekseni etrafındaki bir tam dönüşü ne kadar sürer?', 'siklar' => ['A' => '12 saat', 'B' => '24 saat', 'C' => '30 gün', 'D' => '365 gün'], 'dogru' => 'B'],
            59 => ['soru' => 'Işık hızı saniyede yaklaşık kaç km\'dir?', 'siklar' => ['A' => '150.000', 'B' => '300.000', 'C' => '500.000', 'D' => '1.000.000'], 'dogru' => 'B'],
            60 => ['soru' => 'Sıfır (0) sayısını matematik literatürüne kazandıran İslam bilgini kimdir?', 'siklar' => ['A' => 'İbn-i Sina', 'B' => 'Harezmi', 'C' => 'Biruni', 'D' => 'Farabi'], 'dogru' => 'B'],
            61 => ['soru' => 'Karasal iklimin en belirgin bitki örtüsü nedir?', 'siklar' => ['A' => 'Maki', 'B' => 'Bozkır (Step)', 'C' => 'Orman', 'D' => 'Tundra'], 'dogru' => 'B'],
            62 => ['soru' => 'Bitkilerde fotosentezin gerçekleştiği organel hangisidir?', 'siklar' => ['A' => 'Ribozom', 'B' => 'Kloroplast', 'C' => 'Koful', 'D' => 'Sentrozom'], 'dogru' => 'B'],
            63 => ['soru' => 'Hentbol maçında bir takım sahada kaç oyuncu ile yer alır?', 'siklar' => ['A' => '5', 'B' => '6', 'C' => '7', 'D' => '8'], 'dogru' => 'C'],
            64 => ['soru' => 'İspanya\'nın başkenti neresidir?', 'siklar' => ['A' => 'Barselona', 'B' => 'Sevilla', 'C' => 'Madrid', 'D' => 'Valensiya'], 'dogru' => 'C'],
            65 => ['soru' => 'Kendi ışığını üreten gök cisimlerine ne denir?', 'siklar' => ['A' => 'Gezegen', 'B' => 'Yıldız', 'C' => 'Uydu', 'D' => 'Asteroit'], 'dogru' => 'B'],
            66 => ['soru' => 'Tarihte parayı ilk bulan uygarlık hangisidir?', 'siklar' => ['A' => 'Sümerler', 'B' => 'Hititler', 'C' => 'Lidyalılar', 'D' => 'İyonlar'], 'dogru' => 'C'],
            67 => ['soru' => 'Yazıyı icat eden ilk uygarlık hangisidir?', 'siklar' => ['A' => 'Sümerler', 'B' => 'Mısırlılar', 'C' => 'Babiller', 'D' => 'Asurlar'], 'dogru' => 'A'],
            68 => ['soru' => 'İnsan vücudundaki en uzun ve en güçlü kemik hangisidir?', 'siklar' => ['A' => 'Kaval kemiği', 'B' => 'Uyluk kemiği', 'C' => 'Kol kemiği', 'D' => 'Kaburga'], 'dogru' => 'B'],
            69 => ['soru' => 'Rusya\'nın başkenti neresidir?', 'siklar' => ['A' => 'Sankt-Peterburg', 'B' => 'Kazan', 'C' => 'Moskova', 'D' => 'Soçi'], 'dogru' => 'C'],
            70 => ['soru' => 'Kalsiyumun kimyasal simgesi nedir?', 'siklar' => ['A' => 'C', 'B' => 'Cl', 'C' => 'Ca', 'D' => 'Cs'], 'dogru' => 'C'],
            71 => ['soru' => 'Kutup ayıları hangi bölgede yaşar?', 'siklar' => ['A' => 'Kuzey Kutbu', 'B' => 'Güney Kutbu (Antarktika)', 'C' => 'Ekvator', 'D' => 'Avustralya'], 'dogru' => 'A'],
            72 => ['soru' => 'Penguenler doğal ortamda nerede yaşar?', 'siklar' => ['A' => 'Kuzey Kutbu', 'B' => 'Güney Kutbu ve çevresi', 'C' => 'Grönland', 'D' => 'İzlanda'], 'dogru' => 'B'],
            73 => ['soru' => 'Dünyanın en yüksek şelalesi hangisidir?', 'siklar' => ['A' => 'Niagara', 'B' => 'Angel Şelalesi', 'C' => 'Victoria', 'D' => 'İguazu'], 'dogru' => 'B'],
            74 => ['soru' => 'İlk modern olimpiyat oyunları hangi şehirde yapılmıştır?', 'siklar' => ['A' => 'Paris', 'B' => 'Londra', 'C' => 'Atina', 'D' => 'Roma'], 'dogru' => 'C'],
            75 => ['soru' => 'Tuzun kimyasal formülü nedir?', 'siklar' => ['A' => 'H2O', 'B' => 'CO2', 'C' => 'NaCl', 'D' => 'HCl'], 'dogru' => 'C'],
            76 => ['soru' => 'Azerbaycan\'ın başkenti neresidir?', 'siklar' => ['A' => 'Gence', 'B' => 'Bakü', 'C' => 'Nahçıvan', 'D' => 'Şeki'], 'dogru' => 'B'],
            77 => ['soru' => 'Saf suyun pH değeri kaçtır?', 'siklar' => ['A' => '0', 'B' => '5', 'C' => '7', 'D' => '14'], 'dogru' => 'C'],
            78 => ['soru' => 'TBMM hangi tarihte açılmıştır?', 'siklar' => ['A' => '19 Mayıs 1919', 'B' => '23 Nisan 1920', 'C' => '29 Ekim 1923', 'D' => '30 Ağustos 1922'], 'dogru' => 'B'],
            79 => ['soru' => 'Dünyanın en derin çukuru hangisidir?', 'siklar' => ['A' => 'Mariana Çukuru', 'B' => 'Porto Riko Çukuru', 'C' => 'Java Çukuru', 'D' => 'Tonga Çukuru'], 'dogru' => 'A'],
            80 => ['soru' => 'Bir karenin kaç simetri doğrusu vardır?', 'siklar' => ['A' => '2', 'B' => '4', 'C' => '6', 'D' => '8'], 'dogru' => 'B'],
            81 => ['soru' => 'İç organların çalışmasını kontrol eden istemsiz kas türü hangisidir?', 'siklar' => ['A' => 'Çizgili kas', 'B' => 'Düz kas', 'C' => 'İskelet kası', 'D' => 'Eklem kası'], 'dogru' => 'B'],
            82 => ['soru' => 'Mısır hangi kıtadadır?', 'siklar' => ['A' => 'Asya', 'B' => 'Avrupa', 'C' => 'Afrika', 'D' => 'Güney Amerika'], 'dogru' => 'C'],
            83 => ['soru' => 'Azot gazının periyodik cetveldeki simgesi nedir?', 'siklar' => ['A' => 'Az', 'B' => 'A', 'C' => 'N', 'D' => 'Na'], 'dogru' => 'C'],
            84 => ['soru' => 'Tıbbın babası olarak kabul edilen antik çağ hekimi kimdir?', 'siklar' => ['A' => 'Aristo', 'B' => 'Sokrates', 'C' => 'Hipokrat', 'D' => 'Platon'], 'dogru' => 'C'],
            85 => ['soru' => 'Kudüs hangi dine göre kutsaldır?', 'siklar' => ['A' => 'Yalnızca İslamiyet', 'B' => 'Yalnızca Hristiyanlık', 'C' => 'Yalnızca Musevilik', 'D' => 'Üç semavi din'], 'dogru' => 'D'],
            86 => ['soru' => 'Portekiz\'in başkenti neresidir?', 'siklar' => ['A' => 'Porto', 'B' => 'Lizbon', 'C' => 'Braga', 'D' => 'Coimbra'], 'dogru' => 'B'],
            87 => ['soru' => 'Pusulanın mıknatıslı ibresi hangi yönü gösterir?', 'siklar' => ['A' => 'Kuzey', 'B' => 'Güney', 'C' => 'Doğu', 'D' => 'Batı'], 'dogru' => 'A'],
            88 => ['soru' => 'Türkiye\'de zeytin üretiminde öne çıkan bölge hangisidir?', 'siklar' => ['A' => 'İç Anadolu', 'B' => 'Ege Bölgesi', 'C' => 'Doğu Anadolu', 'D' => 'Karadeniz'], 'dogru' => 'B'],
            89 => ['soru' => 'Göz tansiyonu hastalığının tıptaki adı nedir?', 'siklar' => ['A' => 'Katarakt', 'B' => 'Glokom', 'C' => 'Miyop', 'D' => 'Astigmat'], 'dogru' => 'B'],
            90 => ['soru' => 'Çay üretiminin neredeyse tamamının yapıldığı bölgemiz hangisidir?', 'siklar' => ['A' => 'Doğu Karadeniz', 'B' => 'Marmara', 'C' => 'Akdeniz', 'D' => 'Güneydoğu'], 'dogru' => 'A'],
            91 => ['soru' => 'Güneş ışığından vücudumuzun ürettiği vitamin hangisidir?', 'siklar' => ['A' => 'A Vitamini', 'B' => 'B Vitamini', 'C' => 'C Vitamini', 'D' => 'D Vitamini'], 'dogru' => 'D'],
            92 => ['soru' => 'Dünyanın en kalabalık ülkesi hangisidir?', 'siklar' => ['A' => 'Hindistan', 'B' => 'ABD', 'C' => 'Endonezya', 'D' => 'Brezilya'], 'dogru' => 'A'],
            93 => ['soru' => 'Kan gruplarında genel alıcı olarak bilinen grup hangisidir?', 'siklar' => ['A' => '0 Rh+', 'B' => 'AB Rh+', 'C' => 'A Rh-', 'D' => 'B Rh+'], 'dogru' => 'B'],
            94 => ['soru' => 'Bakırın periyodik tablodaki simgesi nedir?', 'siklar' => ['A' => 'Ba', 'B' => 'Bk', 'C' => 'Cu', 'D' => 'Cr'], 'dogru' => 'C'],
            95 => ['soru' => 'Türkiye\'nin yüzölçümü en küçük ili hangisidir?', 'siklar' => ['A' => 'Kilis', 'B' => 'Yalova', 'C' => 'Bayburt', 'D' => 'Bartın'], 'dogru' => 'B'],
            96 => ['soru' => 'Sıcak hava balonlarıyla ünlü turizm bölgemiz hangisidir?', 'siklar' => ['A' => 'Pamukkale', 'B' => 'Kapadokya', 'C' => 'Efes', 'D' => 'Uludağ'], 'dogru' => 'B'],
            97 => ['soru' => 'Bir dairenin çevresini çapına böldüğümüzde çıkan sabit sayı nedir?', 'siklar' => ['A' => 'Euler sayısı (e)', 'B' => 'Pi sayısı (π)', 'C' => 'Altın oran (φ)', 'D' => 'Yer çekimi ivmesi (g)'], 'dogru' => 'B'],
            98 => ['soru' => 'Ses dalgaları hangi ortamda kesinlikle yayılamaz?', 'siklar' => ['A' => 'Katı', 'B' => 'Sıvı', 'C' => 'Gaz', 'D' => 'Boşluk (Vakum)'], 'dogru' => 'D'],
            99 => ['soru' => 'Nobel ödülleri hangi ülkede verilir (Barış hariç)?', 'siklar' => ['A' => 'Norveç', 'B' => 'İsveç', 'C' => 'Danimarka', 'D' => 'Finlandiya'], 'dogru' => 'B'],
            100 => ['soru' => 'Güneş sistemi dışındaki gezegenlere ne ad verilir?', 'siklar' => ['A' => 'Cüce Gezegen', 'B' => 'Ötegezegen (Exoplanet)', 'C' => 'Kuyruklu Yıldız', 'D' => 'Meteor'], 'dogru' => 'B']
        ];
    }

    public function QuizController()
    {
        $tumSorular = $this->soruHavuzunuGetir();

        // 100 soru içinden rastgele 10 tanesini seç
        $secilenSorular = collect($tumSorular)->random(10)->all();

        // Oturuma kaydet (Cevaplar kontrol edilirken kullanılacak)
        session(['sinav_sorulari' => $secilenSorular]);

        return view('sorular', ['sorular' => $secilenSorular]);
    }

    public function sinavDegerlendir(Request $request)
    {
        $secilenSorular = session('sinav_sorulari', []);

        if (empty($secilenSorular)) {
            return redirect('/c1/action4');
        }

        $cevaplar = $request->input('cevaplar', []);
        $dogruSayisi = 0;
        $yanlisSayisi = 0;
        $bosSayisi = 0;

        foreach ($secilenSorular as $id => $soru) {
            $verilen = $cevaplar[$id] ?? null;

            if ($verilen === null) {
                $bosSayisi++;
            } elseif ($verilen === $soru['dogru']) {
                $dogruSayisi++;
            } else {
                $yanlisSayisi++;
            }
        }

        $puan = $dogruSayisi * 10;

        return view('sorular', [
            'sorular' => $secilenSorular,
            'sonuc' => [
                'dogru' => $dogruSayisi,
                'yanlis' => $yanlisSayisi,
                'bos' => $bosSayisi,
                'puan' => $puan,
                'kullaniciCevaplari' => $cevaplar
            ]
        ]);
    }
}
