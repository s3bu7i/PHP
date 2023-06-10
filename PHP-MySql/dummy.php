<?
$name = strip_tags($_POST["name"]);
$age = $_POST["age"] * 1;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

<head>
    <title>POST metodu ilə məlumatların socketlə göndərilməsi</title>
</head>

<body>
    <h1>POST metodu ilə məlumatların socketlə göndərilməsi</h1>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {	
	if ($name and $age) {
		echo "<h1>Salam, $name</h1>";
		echo "<h3>Sənin $age yaşın var</h3>";
	}
	else {
		print "<h3>Gİriş məlumatları yoxdur!</h3>";
	}
}
?>
    <form action="dummy.php" method="POST">
        <label>Adınız: </label><input type="text" name="name"><br>
        <label>Yaşınız: </label><input type="text" name="age"><br>
        <input type="submit" name="submit" value="göndər">
    </form>
</body>

</html>