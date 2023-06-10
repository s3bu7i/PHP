<?php
//String:

//Bir cümləni tərsinə çevirən bir PHP funksiyası yazın.
function reverseSentence($sentence){
  $reversed = strrev($sentence);
  return $reversed;
}
//test
$sentence = "Bu bir cumle";
$reversedSentence = reverseSentence($sentence);
echo $reversedSentence;

//Bir cümlədəki sözləri böyük hərflərlə yazan bir PHP funksiyası yazın.
function capitalizeWords($sentence){
  $capitalized = strtoupper($sentence);
  return $capitalized;
}
//test
$sentence = "Bu bir test";
$capitalizedWords = capitalizeWords($sentence);
echo $capitalizedWords;

//Bir cümlənin hər bir sözünü dəyişdirən bir PHP funksiyası yazın.
function replaceWords($sentence, $search, $replace) {
  $replaced = str_replace($search, $replace, $sentence);
  return $replaced;
}
//TEST   
$sentence = "Bu bir test cümlesi.";
$search = "test";
$replace = "örnek";
$replacedSentence = replaceWords($sentence, $search, $replace);
echo $replacedSentence;


?>