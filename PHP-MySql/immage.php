<?php
session_start();

// TAPŞIRIQ 1
$nChars = 5; // İxtiyari simvolların sayı
$chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890'; // İstifadə olunacaq simvollar
$randStr = substr(str_shuffle($chars), 0, $nChars); // İxtiyari simvolların generasiyası
$_SESSION['random_string'] = $randStr; // Sesiya dəyişənə mənimsəmə

// TAPŞIRIQ 2
$imageFile = 'images/noise.jpg'; // Şəkil faylının yolu
$im = imagecreatefromjpeg($imageFile); // Şəkilin yüklənməsi
$color = imagecolorallocate($im, 255, 255, 255); // Sətirin rəngi
$startX = 20; // Sətirin başlanğıc x koordinatı
$startY = 30; // Sətirin başlanğıc y koordinatı

for ($i = 0; $i < $nChars; $i++) {
    $char = $randStr[$i]; // Hər bir simvol
    imagettftext($im, 18, 0, $startX, $startY, $color, 'arial.ttf', $char); // Sətirin yaradılması
    $startX += 20; // Sətirin sağa keçid koordinatı
}

header('Content-Type: image/jpeg');
imagejpeg($im, null, 90); // 10% sıxılma ilə şəklin çıxışı

imagedestroy($im);

//--------------------------------------------------------------------------------------------------
session_start();

// TAPŞIRIQ 1
$result = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_SESSION['random_string'])) {
        $randStr = $_SESSION['random_string'];
        $userStr = $_POST['str'];
        if ($randStr === $userStr) {
            $result = "Düzdür";
        } else {
            $result = "Düz deyil";
        }
    } else {
        $result = "Qrafikanı xoda sal!";
    }
}

// TAPŞIRIQ 2
$resultValue = $result;
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

<head>
    <title>Qeydiyyat</title>
</head>

<body>
    <h1>Qeydiyyat</h1>
    <form action="" method="post">
        <div>
            <img src="noise-picture.php">
        </div>
        <div>
            <label>Sətiri daxil edin</label>
            <input type="text" name="str" size="6">
        </div>
        <input type="submit" value="OK">
    </form>
    <?php
echo $resultValue;

</body>
</html>

//----------------------------------------------------------------------------------------------
$url = "https://cbar.az/currencies/20.02.2023.xml";

// XML sənədini yükləyin
$xml = file_get_contents($url);

// XML sənədini pars etmək üçün SimpleXML istifadə edin
$data = simplexml_load_string($xml);

// Görmək istədiyiniz valyutanın kodunu təyin edin
$valyutaKodu = "USD"; // Misal olaraq "USD" (ABŞ dolları)

// Valyuta məzənnələrini axtarın
$mezenne = null;
foreach ($data->ValType as $valType) {
    if ($valType->attributes()->Type == "Xarici valyutalar") {
        foreach ($valType->Valute as $valute) {
            if ($valute->Code == $valyutaKodu) {
                $mezenne = $valute;
                break;
            }
        }
    }
}

// Valyutanın məzənnələrini əldə edin
if ($mezenne != null) {
    $valyutaAdi = $mezenne->Name;
    $valyutaKursu = $mezenne->Value;
    $valyutaKodu = $mezenne->Code;
    
    echo "Valyuta adı: " . $valyutaAdi . "<br>";
    echo "Valyuta kodu: " . $valyutaKodu . "<br>";
    echo "Valyuta kursu: " . $valyutaKursu . "<br>";
    
    // Qrafik çəkmək üçün ilətişim qurun və valyutanın məzənnələrini qrafik kimi göstərin
    // Burada ilətişim prosesi üçün uyğun bir servis və ya kütüphane istifadə edə bilərsiniz
} else {
    echo "Belə bir valyuta tapılmadı.";
}
?>