<?php
error_reporting(E_ALL);
class Hash{
    public function md5Hash($string){
        return md5($string);

    }
    public function sha1Hash($string){
        return sha1($string);

    } //bu özellikleri userz a aktarmak için extends kullanılır (miras)




}
class   Userz extends Hash
{
    public $username;
    public $password;

    public function saveUserz($username, $password)
    {
        $this->username = $username;
        $this->password = $this->sha1Hash($password);
    }

    public function showUser()
    {
        echo $this->username."<br>f";
        echo $this-> password;
    }
}

$Userz = new Userz();
$Userz->saveUserz('furkankilic', 'asdasd12');
$Userz->showUser();
 /// hem kendi class ı hem de diğer sınıftan miras yolu ile aldıgı function aynı ise kendi sınıfındaki kullanılır (aynı isimli)
/// eğer diğer sınıftaki extends edilen kullanılmak istenirse parent::md5Hash($password) şeklinde kullanılır
////// final ise class ın son halini belirtir, miras alınamaz , metodda final ise miras alan sınıfta final adıyla metod varsa aynı isimli metodu overwrite edemiyoruz

class Bir{
    public function metodBir(){
        echo '<br> bir <br>';
    }
}
 class  Iki extends Bir{
  /*'final ' overwrite edemeyiz */ public function metodIki(){
    echo 'iki <br> ';
    }

}
class Uc extends Iki{
    public function metodUc(){
        echo 'uc <br> ';
        }
    function metodIki(){
        echo 'iki  overrideee <br> ';
    }
}
//metod 3 içinde metod2 yi tekrardan tanımlayıp override ettik ama metod 2 final olsaydı hata vericekti yapamıcaktı
$Uc = new Uc();
 $Uc->metodBir();
 $Uc->metodIki();
 $Uc->metodUc();
