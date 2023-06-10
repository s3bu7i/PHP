<?php
//Bir kullanıcının adını ve yaşını cookies vasitəsilə saxlayan və çap edən bir PHP skripti yazın.
//Bir cookie-nin müddətini tənzimləyən bir PHP skripti yazın.
//Bir cookie-nin silinməsini təmin edən bir PHP skripti yazın.

$name = $_POST['name'];
$age = $_POST['age'];

// cookie yaradir 
setcookie('user_name', $name, time() + (86400*30), "/");
setcookie('user_age', $age, time() + (86400*30), "/");

echo "Kulanici adi:".$_COOKIE['user_name']."<br>";
echo "Yas: ".$_COOKIE['user.age'];

//cookie suresi
setcookie('excample_cookie', 'value', time() + 3600, "/");
echo "Cookie yaradildui ve suresi yaradildi ";


//cookie silme
setcookie('excample_cookie', 'value', time() - 3600, "/");
echo "Cookie silindi";


?>