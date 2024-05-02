<?php
$ad=$_POST["adiniz"];
$soyad=$_POST["soyadiniz"];
$emailiniz=$_POST["emailiniz"];
$teliniz=$_POST["teliniz"];
$mesajiniz=$_POST["textarea"];

echo "Adınız :".$ad."<br/><br/>";
echo "Soyadınız :".$soyad."<br/><br/>";
echo "E-mailiniz :".$emailiniz."<br/><br/>";
echo "Telefonunuz :".$teliniz."<br/><br/>";
echo "Mesajınız :".$mesajiniz;

header("refresh:10;anasayfa.html");
?>