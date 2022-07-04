<?php
abstract class Urun{
    // keyword ile oluşturulabilir, bu sınıflar için şablon oluşturmaya yarar
    public $urunAdi;
    public $urunFiyat;
    public $urunVergi;







    abstract public function urunAdi($urunAdi);
    abstract public function urunFiyat($urunFiyat);
    abstract public function urunVergi($urunVergi);

    public function urunEkle(){
        //normal fonksiyonlar da olabilir içinde
        echo 'urun adı'.$this->urunAdi;
        echo 'urun fiyat'.$this->urunFiyat;
        echo 'urun vergi'.$this->urunVergi;

    }


}
class Icecek extends Urun //abstractan türetildiği için tanımlamamız lazım, üzerine geldiğimizde addMetods çıkıyor onun ile hazır ekliyor
{
    public function urunAdi($urunAdi)
    {
        $this->urunAdi=$urunAdi;
    }

    public function urunFiyat($urunFiyat)
    {
        $this->urunFiyat=$urunFiyat;

    }

    public function urunVergi($urunVergi)
    {
        $this->urunVergi=$urunVergi;

    }
}
$Icecek = new Icecek();
$Icecek->urunAdi('kola' <br>);
$Icecek->urunFiyat('12 <br>');
$Icecek->urunVergi('8 <br>');
$Icecek-> urunEkle();