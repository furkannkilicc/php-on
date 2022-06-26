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





?>
<style>
    h1{
        color: green;
    }
</style>
