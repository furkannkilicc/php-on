<?php
//touch() ile dosya oluştururuz time şuanki tarihi verir 1 günü çıkarırsak 86400 sn 1 gün geri atar
//touch('deneme.txt',time());
//unlink('deneme.txt');// silmek için
fopen('deneme.txt',); //sonra 2. parametre olarak dosya erisim metodlarınu veririz.
//r:read, r+: hem okuma hem yazma , :write , içerik vrsa hepsi siler yeniden yazılır  , adreste yoksa yeniden oluşurulur
//  a: dosyaya veri eklemek için , içerik varsa silinmez eklenir sonuna , yoksa adreste yeniden oluşturukur
// a+: dosyaya hem veri eklenmesini söyler hem de verinin okunması gerektiğini belirtir.,
5.04