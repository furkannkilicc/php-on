<?php
/* unset($_SESSION['session_anahtar']); ile bir anahtara air session değeri silinir.

session_destroy(); ile oturum sonlandırılır.*/
session_start(); // session başlatırız
//$_SESSION['İSİM']='furkan'; //oturum basladıgında bu çalışacak
//session dizi oldugu için içine dizi de gönderebiliriz .
$_SESSION['kullanici'] =[
    'isim'=>'furkan',
    'soyisim'=>'kilic',
    'yas'=>23
];