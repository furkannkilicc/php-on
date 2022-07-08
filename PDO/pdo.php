<?php
////veritabanı ile işlem ypamak için PDO kullanılır

///dsn: data source name yani hangi sunucuya bağlanacağımızı tanımlarız
///
try{
    $db = new PDO('mysql:host=localhost;dbname:testdb;','root','root');
//    $db->query('USE testdb;');
//$db->query("CREATE TABLE pdoile(
//    id INT(1),
//    test VARCHAR(50),
//    PRIMARY KEY (id)
//) ;");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->query('SET @@lc_time_names ="tr_TR";');//türkçe karakterler için ayarı burdan ayarlayabiliriz.
$db->query('SET CHARACTER_SET_CONNECTION=utf8mb4');//bağlantımzıın karakter setimizin  ayarlıyoruz
}catch (PDOException $e) {
    echo $e->getMessage();

}
$select= $db->query("SELECT * FROM  testdb.testdb");

//echo  phpinfo(); ç