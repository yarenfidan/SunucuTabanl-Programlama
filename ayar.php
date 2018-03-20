<?php

if($_POST){
if(isset($_POST['eposta'])&&isset($_POST['sifre'])){
$eposta=trim(strip_tags($_POST['eposta']));
$sifre=trim(strip_tags($_POST['sifre']));
$durum=strstr($eposta,"@hotmail.com");
/*str_replace():metin içerisinde istediğimiz metni başka metin ile değiştiriyor*/
if($durum=="@hotmail.com"){
echo " www.oys.deu.edu.tr yönlendiriliyorsunuz";
header("Refresh: 2; url=http://oys.deu.edu.tr/"); 
}else{ if ($durum=="@gmail.com"){
 echo "www.oys2.deu.edu.tr adresine yönlendiriliyorsunuz";
}
header("Refresh: 2; url=http://www.oys2.deu.edu.tr");
}
}
}


?>