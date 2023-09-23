
<?php


function outputNumber($a)
{
  echo "引数の値は" . $a . "です";
  return;
}

outputNumber(2);
echo "<br />";
outputNumber(4);

echo "<br />";
echo "<br />";

function outputHello()
{
  echo "Hello world";
}

outputHello(); // ①


echo "<br />";
echo "<br />";

function multiple($num1, $num2)
{
    $value = $num1 * $num2;
    return $value;
}

$answer = multiple(2,3);
echo $answer;

echo "<br />";
echo "<br />";

function Test($score1, $score2, $score3) 
{
    $total = $score1 + $score2 + $score3;
    return $total;
}
$myscore1 = 90;
$myscore2 = 10;
$myscore3 = 70;


$all = Test($myscore1, $myscore2, $myscore3);

if($all>210){
    echo "合計点は". $all. "点なので合格です。";
}else{
    echo "合計点は". $all. "点なので不合格です。";
}

echo "<br />";
echo "<br />";

function triangle($a,$h) {
    $s_t=$a*$h/2;
    return $s_t;
}

$s1=triangle(3,5);
echo $s1;
echo "<br />";

function square($a, $h){
    $s_s=$a*$h;
    return $s_s;
}

$s2=square(3,5);
echo $s2;
echo "<br />";