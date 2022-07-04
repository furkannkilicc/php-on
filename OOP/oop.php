<?php

class User {
    //değişken sabit fonksiyon tanumlayabiliriz
    public $isim = 'furkan';
    public $toplam;// burda tanımlayıp değer atayabiliriz
    const YAS =23;


    public function isimYaz(){
         return $this->isim.' kılıç';  // User sınıfın isim proportysine eriştik


    }
    public function topla($num1,$num2){
        $this->toplam=$num1+ $num2;
    }



}
    $User = new User(); // dışarıdan kullanabilmek için başlatmamız gerekiyor
 echo  $User -> isimYaz();
 echo $User::YAS; //sabitlere ulaşmak için
 $User->topla(5,6);// değer atayıp kullandık
echo  $User->toplam."<br>";
$User->topla(30,41);

echo  $User->toplam."<br>"; // değer atayıp bastırdık ekrana istediğimiz kadar çağırabiliriz
echo  $User->toplam;// son değer olarak 71 atadık 71 basar


