<?php
	/*
	TAPŞIRIQ 1
	- getMenu() funksiyasını yazın
	- Funksiyaya ilk $menu arqumenti verin, massivin daxilində menyunun strukturu olacaq
	- Funksiyanın daxilində TRUE qiyməti ilə olan $vertical arqumenti verin. Bu parametr menyunun vertikal və ya horizontal olmamasını təyin edəcək
	
	TAPŞIRIQ 2
	- Lab1_03 qovluğunda menu.php faylını açın
	- $menu massivini yaradan kodu köcürdüb bu fayla qoyun
	- menyunu göstərən kodu köçürdün
	- köçürdülmüş kodu getMenu() funksiyasına qoyun 
	- kodu elə dəyişin ki nəticə funksiyaya daxil olan $menu və $vertical parametrlərinə görə çəkilsin
	*/
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="az" lang="az">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Menyu</title>
</head>

<body>
    <h1>Menyu</h1>
    <?php
	function getMenu($menu, $vertical = false) {
  		$menu_html = "<nav>";
  
		if ($vertical) {
			$menu_html .= "<ul>";
			foreach ($menu as $title => $link) {
			$menu_html .= "<li><a href='$link'>$title</a></li>";
			}
			$menu_html .= "</ul>";
		} else {
			foreach ($menu as $title => $link) {
			$menu_html .= "<a href='$link'>$title</a>";
			}
		}
  
  		$menu_html .= "</nav>";
  
  		return $menu_html;
}
	$menu = array(
		"Home" => "index.php",
		"About" => "about.php",
		"Services" => "services.php",
		"Contact" => "contact.html"
);

	echo getMenu($menu, true);


	?>
</body>

</html>