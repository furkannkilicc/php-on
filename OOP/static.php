<?php
//fonksiyonlarda static
//function say(){
//    static $sayi; // static old i.çin 12 3 artar ama static olmsaa 1 1 1 gider
//    echo $sayi;
//    $sayi++;
//}
//
//say();
//say();
//

//CLASS İCİNDE STATIC
class Userx{

    public static $isim;
    public $sname;


    public static function SetIsım($isim){

        self::$isim=$isim;







        /* SELF OLMAYANA ERİŞMEK İÇİN
$self= new self();  değişken oluşturup sınıf başlattık
$self->soyisim   ile ulaşılabilir
*/

        //self::$isim=$isim;
//static tanımlı yerde this yerine self ile erişiriz
    }
public static function getIsım(){
        return self::$isim;
}

}

Userx::SetIsım('Elon Musk');
echo Userx::getIsım();




//sınıfları başlatmadan static tanımlara erişebiliriz
//Userx::$isim='FurkanKilic123';
////echo Userx::$isim;   //furkankilic123
////Userx::setIsım('cenk tosun ');
//$Userx = new  Userx();
//$Userx->sname='asdas';
//echo $Userx->sname;
//
