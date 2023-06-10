<?php
//Functions:

//İki rəqəmin cəmini hesablayan bir PHP funksiyası yazın.
function calculateSum($num1, $num2) {
  $sum = $num1 + $num2;
  return $sum;
}
//test
$result = calculateSum(5, 3);
echo $result;


//Bir massivin ən böyük elementini tapan bir PHP funksiyası yazın.
function calculateArraySum($array) {
  $sum = array_sum($array);
  return $sum;
}
//test:
$numbers = [2, 4, 6, 8];
$result = calculateArraySum($numbers);
echo $result;


//Bir massivin elementlərini toplayan bir PHP funksiyası yazın.
function findMax($array) {
  $max = max($array);
  return $max;
}
//task
$numbers = [10, 5, 8, 15, 3];
$maxNumber = findMax($numbers);
echo $maxNumber;





?>