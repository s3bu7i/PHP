<?php
//session
//Bir oturum başlatmaq üçün bir PHP skripti yazın və istifadəçinin adını oturumda saxlayın.
//Bir oturumda saxlanılan istifadəçi adını göstərən bir PHP skripti yazın.
//Bir oturumu bitirmək üçün bir PHP skripti yazın və oturumda saxlanılan istifadəçi adını silin.

session_start();

$name = $_POST['name'];
$_SESSION['user_name'];

echo "Oturum baslatildi. Kulanici adi: ".$_SESSION['user_name'];


// Oturumu sonlandır ve oturum verilerini sil
session_unset();
session_destroy();

echo "Oturum sonlandirlid";
?>