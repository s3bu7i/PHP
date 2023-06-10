<?php
/*
TAPŞIRIQ 1
- Girişləri yadda saxlayan dəyişənlər yaradın
- Girişləri sayan counter dəyişəni yaradın və cookie-ə lazımı qaydada ötürün
- Son daxil olma vaxtını da cooki-esdə yadda saxlayın
- Dəyişənləri cookiyə ötürüb yazın
*/
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

	// Giriş sayacını artırır
	session_start();
	if (isset($_SESSION['counter'])) {
		$_SESSION['counter']++;
	} else {
		$_SESSION['counter'] = 1;
	}

	// Son daxil olma vaxtını və sayacın dəyərini cookie-lərə yazır
	setcookie('last_login', date('Y-m-d H:i:s'), time() + 3600 * 24 * 30);
	setcookie('visit_count', $_SESSION['counter'], time() + 3600 * 24 * 30);

	?>


</body>

</html>