<?php
class MyCalculator
{
    private $FirstNumber, $SecondNumber;
    public function __construct($Value1, $Value2)
    {
        $this->FirstNumber = $Value1;
        $this->SecondNumber = $Value2;
    }
    public function Addition()
    {
        return $this->FirstNumber + $this->SecondNumber;
    }
    public function Subtraction()
    {
        return $this->FirstNumber - $this->SecondNumber;
    }
    public function Multiplication()
    {
        return $this->FirstNumber * $this->SecondNumber;
    }
    public function Division()
    {
        return $this->FirstNumber / $this->SecondNumber;
    }
}
$mycalc = new MyCalculator(6, 3);
echo $mycalc->Addition() . "\n";
echo $mycalc->Multiplication() . "\n";
echo $mycalc->Subtraction() . "\n";
echo $mycalc->Division() . "\n";
