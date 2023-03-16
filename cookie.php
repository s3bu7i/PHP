<?php
/*
TAPŞIRIQ 1
- Girişləri yadda saxlayan dəyişənlər yaradın
- Girişləri sayan counter dəyişəni yaradın və cookie-ə lazımı qaydada ötürün
- Son daxil olma vaxtını da cooki-esdə yadda saxlayın
- Dəyişənləri cookiyə ötürüb yazın
*/
$count = array_key_exists("login_count", $_COOKIE) ? (int)$_COOKIE["login_count"] : 0;
$count++;
setcookie("login_count", $count);
$last = array_key_exists("login_last", $_COOKIE) ? (int)$_COOKIE["login_last"] : time();
setcookie("login_last", time());
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="az" lang="az">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Son gəliş</title>
</head>
<body>

<h1>Son gəliş</h1>

<?php
/*
TAPŞIRIQ 2
- Girişlərin sayını və son daxil olma vaxtını ekrana çıxardın
*/
echo $count."<br>";
echo $last;
?>

</body>
</html>