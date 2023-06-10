<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
    /**
    get metodu ile gonderme
    <form method="GET" action="process_get.php">
        <label for="name">Ad:</label>
        <input type="text" name="name" id="name" required>
        <br>
        <label for="email">E-poçt:</label>
        <input type="email" name="email" id="email" required>
        <br>
        <input type="submit" value="Göndər">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
      $name = $_GET["name"];
      $email = $_GET["email"];

      echo "Ad: " . $name . "<br>";
      echo "E-poçt: " . $email;
    }
    ?>
    **/


    <!--post metodu ile gonderme-->
    <form method="POST" action="process_post.php">
        <label for="name">Ad:</label>
        <input type="text" name="name" id="name" required>
        <br>
        <label for="email">E-poçt:</label>
        <input type="email" name="email" id="email" required>
        <br>
        <input type="submit" value="Göndər">
    </form>
    <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];

    echo "Ad: ".$name."<br>";
    echo "E-Poct: ".$email;

  }


  ?>
</body>

</html>