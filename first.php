<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1> html içi</h1>
<script>
    alert('js kodu php içinde  ');
</script>
</body>
</html>


<h1> "selam  "</h1>
<?php
echo  'furkan';
print 'deneme print ';
//asdasd
# asda
/*
adasdasda
asdasdas
adsasda*/


?>
<h1> <?php  echo'html içi php kullanımı'?> </h1>
<h2> <?='kısa kullanum echo ' ?> </h2>
<?php
//değişken deneme harf _ ile başlayabilir
$var = " ilk değişken yazıldı";
echo "bugun <b>$var</b> yaptık";

//sabitler obje hariç tüm veri tipi tutulabilir türkç karakter içerebilir geleneksel olarak büyük harf kullanılır.
//echo İSİM;
define('İSİM','furkan');
//gettype() ile veri tipi öğrenilir, array [], obje $a = new stdClass();
$a = true;
//echo gettype($a);
//var_dump(); değişkenle ilgili içerik ve bilgi
var_dump($a); // bool true
//$a  <=> mekik (spaceship)  0 1  -1 değerlerini alır , eşt old  0 büyük 1 küçük -1 döndürür
//birleştirmek için $a.$b  nokta ile yaparız   += vs yanında .= ile birleştirme yapılabilir
$b='b değişkeni';
$c = ' c değişkeni ';
//if(statement){echo .. }, elseif(){},else{} tek komut var ise paranteze gerek yok  diğer kullanun if(state): endif; { a gerek yok
//ternary op  ? : js ile aynı,        echo $a ==7 ? 'eşit' : 'değil';
//switch($a){
//case 1:
//    echo .....
//    break;
//    case 2:..
//    default: echo ....
//echo $c.$b;
 // Diziler $isimler = array(); veya $isimler = []; print_r($isimler ) ile yazdırılır. key value gösterir.

$isimler2 = array('furkan','ahmet');
$isimler = ['furkan','ali'];
//echo "<pre>"; tek sıra değil de blok göstermeye yarar (preformatted)
print_r($isimler2);
// erişmek için değere key ile $isimler[1]  ahmet
//anahtarı değiştirmek için ise
 $isimler4 = [ 'isim1' => 'furkan','isim2' => 'selim'];
//echo "<pre>";
// print_r($isimler4);
 var_dump($isimler4); //daha detaylı bir bilgi verir
//çok boyutlu diziler
$hayvanlar = ['kuşlar'=> ['kartal','güvercin','leylek'],
    'kedigiller'=>['aslan','kaplan','kedi']];
echo "<pre>";
print_r($hayvanlar);
print_r($hayvanlar);
echo $hayvanlar['kedigiller'][1]; // kaplan döndürür (kedigiller keyi ve 2. index)
foreach ($hayvanlar as $isimlendirdik){
    foreach ($isimlendirdik as $multi ){//multidimensional a erişim

    echo $multi."<br>";
    }
} // as'den sonra istediğimizi yazarız $key ile anahtara da erişiriz
//    echo ++$key.'-'.$isimlendirdik."<br>";
//while döngüsü
$i=0;
while ($i<=5){
    echo "while döngüsü tamamlandı"."<br>";
    $i++;// bunu silip $i++ <=5 te yapabiliriz. ; ile kullanmadan
}

$a1 = 1;
do{
    echo $a1."dowhile<br>";
    $a1++;
}while($a1 <=5);
//fonksiyon tanımlama
function topla($sayi1,$sayi2){ // default değer verebiliriz $sayi1=22 , $sayi2=3
    return $sayi1 + $sayi2;
}
    echo  topla(1,15);
// annoim fonk. ; ile bitirilir
$carp = function ($s1,$s2){
    return $s1*$s2;
};
echo "<br>".$carp(25,8);
//array_map bütün dizi elemanlarını döndürmemizi sağlar , callback alır
$dizi = [1,2,3,4];
$dizi= array_map(function ($e){
    return $e * 5 ;
},$dizi);   // ilk parametre olarak anonim fonk.call back fonk olarak  aldık,bütün diziyi 2 ile çarpıp yeni bi arraya atadık
print_r($dizi);
// anonim fonksiyon
$islemler = [
  'topla'=>function($a,$b){return $a+$b;},
    'cıkar'=>function($a,$b){return $a-$b;},
    'carp'=>function($a,$b){return $a*$b;}

];
echo $islemler['topla'](55,3)."<br>";
echo $islemler['carp'](55,3)."<br>";
echo $islemler['cıkar'](55,3)."<br>";
//recursive (özyineli) fonksiyon
$categories = [
        ['id'=>1,
            'parent'=>0,
            'name'=>'FrontEnd'],
    ['id'=>2,
        'parent'=>0,
        'name'=>'Backend'],
    ['id'=>3,
        'parent'=>2,
        'name'=>'PHP'],
    ['id'=>4,
        'parent'=>1,
        'name'=>'VueJS'],
    ['id'=>5,
        'parent'=>2,
        'name'=>'Laravel'],
    ['id'=>6,
        'parent'=>2,
        'name'=>'NodeJS'],
];
function kategori($arr,$par=0){
    $html="";
    $html.="<ul>";
    foreach ($arr as $value){
        if($value['parent']== $par){
            $html.="<li>";
            $html.=$value['name'];
            $html.=kategori($arr, $value['id']);
            $html.="</li>";
            }
        }
        $html.="</ul>";
        return $html;
        }
    echo kategori($categories,$par=0);

// static olarak tanımlarsak bi fonksiyonu değeri güncellenir ve o değerden devam ederiz.
function say(){
    static $sayi=0; // static olarak tanımlamazsak güncellemez, 0 ve 0 basar static olunca arttırma işlemi olur 0 1
    echo "<h3> $sayi </h3>"; // php içinde html tag için tırnak içi alınır .
    $sayi++;
}
say();
say();

//ÖNEMLİ : ERRORRLARI BASTIRMAK İÇİN TANIMLAMA :  error_reporting(E_ALL);
error_reporting(E_ALL);
//global olarak tnaımlı değişkeni kullanmak için etki alanı içinde "global " .. $isim; tagı kullanılır

$isim='globaal isim';
function isimyaz(){
     global $isim;// global olmazsa içeride tanımlı olan çalışır ali. ama ali altta olursa globalden ali basılır
    $isim='ali';
    echo  $isim;

}
isimyaz();
//echo "</br">;
echo  PHP_EOL; // newline cross platform kullanılabilir.
function ucgen($say){   //sayıyı aşağıda vereceğimiz için buraya değişken tanımladık.
    for($i=0;$i<=$say;$i++){   //$say değişkeni içine yazılan sayıya kadar tekrar etmesi için bir döngü tanımladık.

        $j=0;
        while($j<=$i){  //döngüdeki sayıya ulaşana kadar aşağıdaki işlemi tekrarlaması için while açtık.
            $j++;   //döngünün sonlanabilmesi için değişkeni 1 arttır dedik.
            echo '*' ; // sıfır sayısına ulaşmak i.in sıfırla çarptık.

        }
        echo   "<br>"; // her while döngüsü bittiğinde çalışması için br tagini buraya ekledik.
    }

}
ucgen(5);

//dizeler
$arr=[1,2,3];
print_r($arr);
$ayır= implode('ayıraç',$arr);// arrayi istediğimiz ayıraçla ayırdık.
print_r($ayır);

$newArr= explode('ayıraç',$ayır);//tersine çevirir ne ile ayırdıysak onu göndeririz.
print_r($newArr);

echo  count($newArr); //array elaman sayısını verir
echo PHP_EOL;
echo is_array($isim);//true, false  1  0

//range() ile aralık tanımlayıp sayı yazabilirz
$sayilar=range(1,4) ;// step ile 2 şer arttırdık
shuffle($sayilar); // arrayi karıştırır sırasını S
print_r($sayilar);
echo    gettype($sayilar); // array döndürür range ile
//array combine 2 ayrı diziyi anahtar value olarak eşler  aynı uzunlukta olmalı
$harf=['a','b','c'];
$harf2=['al','ver','ser','al','newKey'=>'YENI']; // newKey adlı valusu yeni olan değer oluşturduk
$combine = array_combine($arr,$harf);
print_r($combine);
$ara= array_count_values($harf2);
print_r($ara); //al 2 ver 1 .. olarak çıktı verir.
//anahtar değer yer değiştirmek array_flip
$değis=array_flip($harf);
print_r($değis);// a. eleman 0 b. eleman 1 değerini alır
$varmi=array_key_exists('a',$harf);//true dondurur ama flip yapıp tersini aldık false.
var_dump($varmi);
//array_map callback ve ilk değer olarak fonksiyon veya anonim fonk. verebiliriz 2. parametre dizimiz
echo "<pre>";
$sayilar2=range(1,10);
$dizi= array_map(function ($e){
return $e+2;
},$sayilar2);
print_r($dizi);

//calback olacak fonksiyon dışarıda da tanımlanabilir
function cube($sayi){
    return $sayi*$sayi*$sayi;
}
$sayilar3=range(1,10);
$sayilar2=range(1,10);
$dizi= array_map('cube'
,$sayilar2);
print_r($dizi);

//array_filter bütün elemanları döndürür filterlenmiş array döndürür

 $cift= array_filter($sayilar2,function ($e){
    return $e%2 == 0? $e:false;
});
print_r($cift);
$tek=array_filter($sayilar3,function ($e){
    return $e%2==1?$e:false;
});
print_r($tek);
 $tek=array_merge($cift,$tek);//array birleştirme , birden cok olabilir
 print_r($tek);

 print_r(array_rand($hayvanlar,1));//arraydan random key alır

$arrr=array_search('2',$arr);//needle value anlamomda samanlıkta iğne aramak  deyiminden, karşılaştığı ilk değerin yerini  basar.

print_r(($arr));
//in_array() değer mevcut mu diye bakar arrayde. true false
//array_shift dizinin baslangıcından bir eleman çıkarır, birden fazla kullanılarak çıkartılabili
//array_pop($dizi) sondan bi eleman çıkarır
//array_slice($dizi,0,2 ) 0 dan başlar 2 eleman getirir.
//array_sum() arrayın toplamı, array_
//array_product() dizideki değerlein çarpımı,
//array_push ($array, 'furkan','ali') array sonuna belli sayıda eleman ekler
//sonuna eklemek istersek $array[]='ali' birşey yazmayınca sonuna ekler
//array_unsift dizinin baslangıcına bir veya daha fazla eklememizi sağlar
//array_keys tum anahtarları bir anahtar alt kümesinde döndürür.
//array_unique() dizide yenilenen değerleri siler, array_values() tüm değerleri döndürür
//current($dizi) dizinin ilk elamanını döndürür ve next () end() prev()  end () ile dolaşabiliriz
//next ($dizi) echo prev($dizi) gibi. reset() dahili göstericinin ilk elemanını döndürür, current() ilki gösterir
//extract () değerleri anahtara dönüştürür, değişken olarak kullanabiliriz
$dizi=['bir'=>'ali','iki'=>'veli'];
extract($dizi);
echo $bir;// ali döndürür
//asort() dizinin anahtar ve değerleri bozmadan küçükten büyüğe
//arsort() ilişkiyi bozmadan büyükten küçüğe

$diziX=[1=>0,51=>01,9=>03];
ksort($diziX);
print_r($diziX);
//ksort anahtara göre küçükten büyüğe ,
//krsort anahtara göre büyükten küçüğe

//STRING FONKSİYONLARI
//strlen verilen metnin uzunluğunu döndürür.// kaç byte oldugunu büyük harf 2 byte
//mb_strlen tam olarak verir  ayrıda 'UTF-8' ile karakter setini de gönderebiliriz..
//explode('-', $metin) metini - ile ayırdık array e atadık
//array yaptığımız stringi tekrardan array yapmak için implode('$', $metin)
//str_split($metim, 2) 2 li harflere böler ama byte düzgün olması için
//mb_str_split(metin 2 ) 2 li boldu
//ltrim(metin)  sol taraftaki boşluğu siler rtrim() sağındakini siler ikisini silmek için trim() hem sağ hem solu siler
//substr(metin,1,10) baslangıc ve bitis değerini verdik 1. den basla 10 karakteri ver
//strtolower() küçük harfe dönüştürür UTF-8 TÜRKÇE KARAKTERLER İÇİN
//strupper() metini büyütür problem çıkabilir o yüzden mb_strtolower(metin,'UTF-8') kullanılabilir  VE CHAR SET TANIMLANABİLİR(mb(multi byte))
//ucfirst() 'uppercase first' metnin ilk harfi  ucwords()  her kelimenin ilk harfini büyütür.
//str_replace(kaynamk,hedef,metin)
$metin="İstanbul şehir caddesi";
$metin= str_replace('caddesi','sokağı',$metin); //İstanbul şehir sokağı döndürür
echo $metin;
//nl2br($metin) 'nl to br '  \n  i <br> ile değiştiriyo \n html tagı olmadan ( pre tagı içinde olmazsa) çalışmaz
$metin="İstanbul şehir \n caddesi";
echo nl2br($metin); //bu şekilde alta atabiliriz
//md5($metin) sha1($metin) şifreleme algoritması
echo    md5($metin)."</br>";// şifremizi basar
//strstr() bir metinde belirtilen karakterden sonrasını döndürür
$metin='Lorem ipsulum dolar sit amet';
echo strstr($metin,'sit'); //sit  de dahil sit amet döndürür
//NEXT FORM












?>
<style>
    h1{
        color: green;
    }
</style>
