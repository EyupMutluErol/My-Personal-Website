<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film Bilgileri</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="ilgiAlanim.css">
</head>

<body>
    <div class="container">
        <form method="post">
            <label for="film_adi">Film/Dizi Adını Girin</label><br>
            <input type="text" id="film_adi" name="film_adi" required autocomplete="off"><br><br />
            <input type="submit" value="Film Bilgilerini Getir" class="gonder"><br /><br />
            <a href="anasayfa.html" class="link">Ana Sayfaya Git</a>
        </form>


        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $apiKey = '6da9902c'; // OMDB sitesinden bana verilen api key
        
            // Kullanıcının aradığı filmi $filmAdi değişkenine atadım
            $filmAdi = $_POST['film_adi'];

            // Film adının girilip girilmediğini kontrol ettim
            if (!empty($filmAdi)) {
                // apiye göndereceğim film adını ve sitenin bana verdiği api keyi sitenin urlsinde gereken kısma yazdım
                $url = "http://www.omdbapi.com/?apikey=$apiKey&t=" . urlencode($filmAdi);

                // cURL ile API'ye istek gönderdim
                $curl = curl_init();//curl oturumunu başlatan kodu yazdım
                curl_setopt($curl, CURLOPT_URL, $url);//curl isteğini yapmak istediğim url'yi atadım
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);//isteğimin sonucunu döndürdü
                $yanit = curl_exec($curl);//yanit değişkenine döndürülen sonucu atadım
                curl_close($curl);//curl oturumunu kapattım

                
                $filmVerisi = json_decode($yanit, true);//api'den gelen json verisini diziye dönüştürdüm 

                if ($filmVerisi && array_key_exists('Response', $filmVerisi) && $filmVerisi['Response'] == 'True') {// API'den gelen verinin doğru olup olmadığını kontrol ettim
                    // apiden verisini çektiğim filmin bilgilerini ve afişinin url'sini değişkenlere atadım 
                    //Köşeli parantez içindeki değişken adları OMDB sitesinin kendi belirlediği değişken adları bir nevi filmlerin özellikleri de diyebiliriz 
                    $baslik = $filmVerisi['Title'];
                    $yil = $filmVerisi['Year'];
                    $tur = $filmVerisi['Genre'];
                    $yonetmen = $filmVerisi['Director'];
                    $oyuncular = $filmVerisi['Actors'];
                    $imdbPuani = $filmVerisi['imdbRating'];
                    $metascorePuani = $filmVerisi['Metascore'];
                    $izlenmeSayisi = $filmVerisi['imdbVotes'];
                    $filmSuresi = $filmVerisi['Runtime'];
                    $aciklama = $filmVerisi['Plot'];
                    $afis = $filmVerisi['Poster'];

                    // verilerini çektiğim filmin bilgilerini ekrana yazdırdım
                    echo "<h1>Film/Dizi Bilgileri</h1>";
                    echo "<h2>$baslik ($yil)</h2>";
                    echo "<p><strong>Tür:</strong> $tur</p>";
                    echo "<p><strong>Yönetmen:</strong> $yonetmen</p>";
                    echo "<p><strong>Oyuncular:</strong> $oyuncular</p>";
                    echo "<p><strong>IMDB Puanı:</strong> $imdbPuani</p>";
                    echo "<p><strong>Metascore Puanı:</strong> $metascorePuani</p>";
                    echo "<p><strong>İzlenme Sayısı:</strong> $izlenmeSayisi</p>";
                    echo "<p><strong>Film Süresi:</strong> $filmSuresi</p>";
                    echo "<p><strong>Açıklama:</strong> $aciklama</p>";
                    echo "<img src=\"$afis\" alt=\"$baslik Afişi\">";
                } else {
                    echo "<p>Film bulunamadı!</p>";
                }
            } else {
                echo "<p>Lütfen bir film adı girin!</p>";
            }
        }
        ?>

    </div>
</body>

</html>