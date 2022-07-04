<?php
class Users{
    private $isim;
    private $soyisim;
public function __construct($isim,$soyisim)    //__ yapınca otomatik  geliyor
$this-> isim= $isim;
$this->soyisim= $soyisim;

}



public function __destruct()
{
    $this->isim=null;
    $this->soyisim=null;
    // TODO: Implement __destruct() method.
}
public function Yaz(){

    echo  $this->isim.' '.$this->soyisim;
}



}
$Users= new Users('furkan','Kilicc');
$Users->Yaz();     // sadece yazı çağırmamıza rağmen çalısma sıralamamız construct -> fonksiyon ->Destruct
                    //veri bağlantııs için kullanılır genelde veya dosya işlemleri için

