<?php
error_reporting(E_ALL);
print_r($_POST);//FORMDA GÖNDERİLEN POST METODLARI  İLE VERİLER BURDA TUTULUYOR
//htmlspecialchars(trim($e) ) gelen html kodlarını engelleme için sunucuda çalışmaz tekrardan html tagın çalıstıgını görmek için
// htmlspecialcharsdecode kullanılır , strip_tags html etiketleirni tamamen temizlemeye yarıyor
//$_REQUEST ile hem get hem post alabiliriz ve cookie ye ulaşabiliriz

