<?php
session_start();
if(isset($_SESSION['kullanici']['isim']))  {
    echo  'merhaba '.$_SESSION['kullanici']['soyisim'].' HOŞ GELDİN ';
    echo "<pre>";f
    print_r($_SESSION);// oturum varsa bütün oturumu ekrana bastık
}else{
    echo  ' otuurm açınız...';
}
