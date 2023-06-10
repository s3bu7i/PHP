<?php
//File:

//Bir faylı oxuyan və məzmununu çapa verən bir PHP skripti yazın.
$file = "test.txt";

//dosyanin olub olmading yoxlamaq
if(file_exists($file)){
  $content = file_get_contents($file);
  echo $content;
}
else {
  echo "Dosya bulunamadi";
}

//Bir fayla məlumat yazan bir PHP skripti yazın.
$file = "test.txt";
$data = "bu da menim text 0jiofasd";

//dosya acmaq
$fileHandle = fopen($file, 'w');
if($fileHandle){
  fwrite($fileHandle, $data);
  fclose($fileHandle);
  echo "Dosya yazi yazildi";
}
else {
  echo "Dosya acilmadi";
}

//Bir faylı silən bir PHP skripti yazın.
<?php
$file = "example.txt";

// Dosyayı silelim
if (unlink($file)) {
  echo "Dosya silindi.";
} else {
  echo "Dosya silinemedi.";
}
?>