<?php
// MySQL serverə qoşulma və bazanı seçmə
define("DB_HOST", "localhost");
define("DB_LOGIN", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "gbook");

$conn = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME) or die(mysqli_connect_error());

// Formanın göndərildiyini yoxlama
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Formdakı məlumatları filtrlə
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $msg = filter_input(INPUT_POST, 'msg', FILTER_SANITIZE_STRING);

    // Göndərilən məlumatları msgs cədvəlinə əlavə etmək üçün SQL sorğusu
    $sql = "INSERT INTO msgs (name, email, msg) VALUES ('$name', '$email', '$msg')";
    mysqli_query($conn, $sql) or die(mysqli_error($conn));

    // Formun yenidən yüklənməsini təmin etmək üçün yönləndirmə
    header("Location: index.php");
    exit();
}

if (isset($_GET['id'])) {
    // Daxil edilən məlumatları filtrdən keçirmək
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

    // Silmək üçün SQL sorğusu
    $sql = "DELETE FROM msgs WHERE id = $id";
    mysqli_query($conn, $sql) or die(mysqli_error($conn));

    // Səhifəni yenidən yükləmək
    header("Location: index.php");
    exit();
}

// msgs cədvəlindən bütün məlumatları əldə etmək üçün SQL sorğusu
$sql = "SELECT * FROM msgs";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

// Sorğunun nəticəsinin sayını əldə etmək
$num_rows = mysqli_num_rows($result);
echo "Nəticə sayı: " . $num_rows . "<br><br>";

// Növbəti nəticələri assosiativ massiv formasında əldə etmək və çıxarmaq
while ($row = mysqli_fetch_assoc($result)) {
    echo "Müəllif: " . $row['name'] . "<br>";
    echo "Mesaj: " . $row['msg'] . "<br>";
    echo "<a href='delete.php?id=" . $row['id'] . "'>Sil</a><br><br>";
}

mysqli_close($conn);
?>

<!-- Forman HTML hissəsi -->
<!DOCTYPE html>
<html>

<head>
    <title>Guestbook Form</title>
</head>

<body>
    <h1>Guestbook Form</h1>
    <form method="POST" action="index.php">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br><br>

        <label for="msg">Message:</label><br>
        <textarea name="msg" id="msg" required></textarea><br><br>

        <input type="submit" value="Submit">
    </form>
</body>

</html>