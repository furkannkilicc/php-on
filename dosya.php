<?php
//touch() ile dosya oluştururuz time şuanki tarihi verir 1 günü çıkarırsak 86400 sn 1 gün geri atar
//touch('deneme.txt',time());
//unlink('deneme.txt');// silmek için
//touch('deneme.txt');
//$dosya = fopen('deneme.txt','a'); //sonra 2. parametre olarak dosya erisim metodlarınu veririz.
//echo fgets($dosya).'<br>';//ilk satırı getitir
//echo fgets($dosya);//ikinci satırı getitir
 //while ile okumak için
//
//while ($satir=fgets($dosya)){
//    echo $satir.'<br>';
//}
//fclose($dosya);// dosyayı kapattık
//fread($dosya,55);// dosyadan 150 byte lık veri getirdi
// echo filesize('de neme.txt');// dosyamızın boyutunu byte cinsinden verir.
//fwrite($dosya,"\n 2.Yeni veri");//dosyamıza veri ekledik
//fputs($dosya,"\n 2.Yeni veri");//dosyamıza veri ekledik

//feof($dosya);//dosyanın sonuna gelip gelmediğimizi gösterir bool döndürür sonda true
////while döngüsünde ise
//while (!feof($dosya)){
//    echo fgets($dosya)."<br>";
//}
//fclose($dosya);

//file_exists()  dosya veya dizinin varlıgını kontrol ederiz , dizinin varlgıını da görebiliriz var_dump(file_exist(dosyalarım)
//is_file() fonksiyonu,içine girilen adresin dosya olup olmadıgını kontrol etmek için kullanılır
//$kontrol=file_exists('deneme.txt');
//var_dump($kontrol);
//file_put_contents('deneme.txr','içerik file put content ',FILE_APPEND)//dosyaya string eklemmeizi sağlar file append sonuna ekler
//file_get_contents()// veriyi tek seferde alabiliyoruz  edebiliyoruz
//** file_put_contents ile php  dosyası '<?php ' '$var='asdas '; gibi  oluşturabiliriz ve değişkenleri ekleyebiliriz  */
//mkdir('/dizinim',0777);/// c/b ise c dizinin altındaki b oluştur 0777 permission defaulttur
//rmdir() dizini siler
//mkdir('b');
//rename('a değişti','değişti');
//rename('b','değişti/yenic');// alt dizine taşıdık
//rmdir('b');
//rename('deneme.txt' , 'değişti/deneme1.txt');// hem isimlendirdik hemde lokasyon değiştirdik, bool döndürür ayrıca rename vardump ile değiştirince true döner
//is_dir() directory mi değil mi diye bakar


//DIŞARIDAN DOSYA DAHİL ETME
//require 'test.txt';  //bu dosyayı dahil ettik uzantı fark etmeksizin , dosya yoksa hata alırız
//include 'test.txt' // bu da aynı çalışır require ile ama dosya yoksa hata almayız istediğimiz kadar dahil edebiliriz
//include_once '  ' ve require_once ile sadece bir kere dahil edilebilir
//** dosya uzantosı php olmasa da php kodları yorumlanır tarayıcıda . url kısmında a.blabla yazarsak php kodlarını görürürz direkt. */




//DOSYA DİZİN LİSTELEME
//__DIR__  DOSYANIN DİZİN YOLUNU GÖSTERİR
/* $files = scandir('.');
// Bulunduğumuz dizindeki tüm dosya ve klasörleri listeler.
$files = array_filter(scandir('.'), 'is_dir');
// Bulunduğumuz dizindeki sadece dosyaları listeler.
$files = glob('*');
// Bulunduğumuz dizindeki sadece dosyaları listeler.
$files = glob('*.php');
// Bulunduğumuz dizindeki sadece .php uzantılı dosyaları listeler.
$files = glob('*.{php,txt}', GLOB_BRACE);
// Bulunduğumuz dizindeki sadece .php uzantılı dosyaları listeler.
$files = glob('*', GLOB_ONLYDIR);
// Bulunduğumuz dizindeki sadece dizinleri listeler.   */

echo  __DIR__  ;
$array= scandir('.'); //dizin tararız (.) şuanki dizini tarar bütün dosyaları gösteirr
echo "<pre>";
print_r($array);
$basedir= require '../';

 glob($basedir.'/*'); // patterne  uyanları getirir /* her şeyi getir demek '/*.php' ile sadece php olanları
//eğer sadece php değil de baska uzantı eklemek istersek{ php,txt,png},GLOB_BRACE  flagi kullanılır


//BİR KLASORDEKİ DOSYALARI OTOMATİK OLARAK EKLEMEK İÇİN
//basedir __DIR__ require eder ve dosya yolunu almamızı sağlar
 $array = glob($basedir.'/değişti/*.{php}',GLOB_BRACE);
 foreach ($array as $file ){
     require  $file; // bu sayade değişti klasoru altındaki php uzantılı dosyaların adresini alıp require ile dahil ettik

 }

 //file_put_contents() text areadaki veriyi dosyaya yazabiliriz.
//$_SERVER server hakkında bilgileri tutar örneğin HTTP_REFERER bu sayfaya nereden geldiğimizi
//**** $_SERVER['HTTP_REFERER] ?? FURKAN // VARSA REFERER DEĞERİNİ YOKSA FURKAN I  YAZAR
// İSTANBUL İÇİN SAATDİLİMİ AYARI date_default_timezone_set('Europe/Istanbul');
//time() 1 ocak 1970 den sonraki saniyeyi verir.  strtotime('now') aynısını verir date() ile '+1 hours, day  yazarsak ekler üzerine
// date içinde kullanırsak istediğimiz formatta onu + 1 gün veya saatlik halini verir.
//istediğimiz tarihe erişmek istersek
//$DateTime = new DateTime();  sınıfı ile işlemleri yapabiliriz $DateTime-> format ('Y-m-d)..)