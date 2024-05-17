<?php

// Birinci Ödev


$filmBaslik1 = "Paper Lives";
$filmBaslik2 = "Walking Dead";

$filmAciklama = "Kağıt toplayarak geçinen ve sağlığı giderek kötüleşen Mehmet terk edilmiş bir çocuk bulur. Birden hayatına giren küçük Ali, onu kendi çocukluğuyla yüzleştirecektir. (18 yaş ve üzeri için uygundur)";

echo "Film Açıklaması:  " . $filmAciklama . "<br>";

echo "<br>";

// 1)  İlk harf hariç diğerlerini küçük yapma


$ilkHarf = substr($filmAciklama, 0, 1);
$digerleri = substr($filmAciklama, 1);
$guncelAciklama = strtoupper($ilkHarf) . strtolower($digerleri);

echo "1) Güncel Açıklama: " . $guncelAciklama . "<br>";

echo "<br>";

// 2)  İlk 50 harfini alıp sonuna ... ekleme

$ilkElliHarf = substr($filmAciklama,0,50);

$guncelAciklama2 = $ilkElliHarf . "..."; 

echo "2) Güncel Açıklama: " . $guncelAciklama2 . "<br>";

echo "<br>";

// 3)  Film Url'sini film başlığına göre düzenleme

$baslik1 = strtolower($filmBaslik1);
$baslik2 = strtolower($filmBaslik2);

$baslik1 = str_replace(' ', '-',$baslik1);
$baslik2 = str_replace(' ', '-',$baslik2);

$baslik1 = preg_replace('/[^a-z0-9\-]/', ' ',$baslik1);
$baslik2 = preg_replace('/[^a-z0-9\-]/', ' ',$baslik2);

$ornekUrl = "https://www.filmornek.com/filmler/" ;

echo "3) Örnek Film Url'si - 1 : " . $ornekUrl . $baslik1 . "<br>";

echo "<br>";

echo "3) Örnek Film Url'si - 2 : " . $ornekUrl . $baslik2 . "<br>";

echo "<br>";


// 4)  Başlık değişkeninde bulunan bilgiyi sayfanın h1 etiketinde kullanma

$baslik = "Filmler";

echo "<h1>" . $baslik . "</h1>" ;



?>