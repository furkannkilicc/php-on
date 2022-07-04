<?php
session_start();//baslatmadan destroy edemiyoruz session ı

session_destroy();// bütün session verilerini sileriz
header('Lodation: a.php');// session sonlandığında a.php sayfasına yönlendirilecek
