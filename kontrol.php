<?php
$mail="b231210101@sakarya.edu.tr";
$sifre="b231210101";

if(($_POST['mail']==$mail) and ($_POST['sifre']==$sifre)){
    header('Location: giris.php');
}
else{
    header('Location: hata.php');
}
?>