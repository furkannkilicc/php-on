<?php
//abstract sınıflara benzer, zorunlu olarak kullanılması gereken metodları belirtmek için kullanılır,
//abstract metod ve sabitler içerebilir,sadece public metod tanımı yapılabilir,aynı sınıfta birden fazla interface

//implements ile istediğimiz yere alırız ve tanımlamasını yaparız birden fazla kullanabiliyoruz
//interface baska interface de extends edebiliriz
//b a yı da extends ettiği için c ve d metodlarını da tanımlamak zorunda kalacaktık



interface A{
    public function a(){}
    public function b() {}
}
interface B extends  A{

    public function c(){}
    public function d() {}



}
class C implements  A,B{
    public function a(){}
    public function b() {}
    public function c(){}
    public function d() {}

}