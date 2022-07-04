<?php

//getters ve setters ile erişebiliriz otomatik eklemek için sağ click -> generate ->getter&setters
    //private sadece sınıf içerisinden erişilebilir
 //protected sınıf içerisinden erişilebilir , dışarıdan erişilemez , miras yoluyla kullanılabilir
class Kullanici {

    public $name;
    private $surname;


    public function getName():string
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }


    public function getSurname():string
    {
        return $this->surname;
    }


    public function setSurname($surname) // return olmadıgı icin : void silindi
    {
        $this->surname = $surname;
    }


    public function getId(): int//retyurn oldugu için gette :string yazabiliriz sette döndürmediği için gerek yok
    {
        return $this->id;
    }

    /**
     *   @param mixed $id     ///AÇIKLAMA SATIRLARI, diğerleri silindi
     */
    public function setId($id)//VOİD METOD ÇAĞIIRLDIGINDA DÖNDÜRÜLECEK DEĞERİ SÖYLÜYOR
    {
        $this->id = $id;
    }
    protected $id;

}
    $Kullanici = new Kullanici();
 $Kullanici->setName('furkan');
 $Kullanici->setSurname('Kilic');
 $Kullanici->setId('5');
 echo $Kullanici->getName()."<br>";
echo $Kullanici->getSurname()."<br>";
echo $Kullanici->getId()."<br>";

