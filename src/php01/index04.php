<?php
$a= 7;

if ($a ==5){
    echo "aは".$a. "です。";

}elseif($a ==7){
    echo "aは7です。";

}else{
    echo "aは5と7以外です。";
}
echo "<br />";
echo "<br />";

$people = "Saburo";

switch($people){
    case "Taro":
    echo "太郎です。";
    break;
    case "Jiro":
    echo "次郎です。";
    break;
    case "Saburo":
    echo "三郎です。";
    break;

}
echo "<br />";
echo "<br />";

$b = ($a>=5) ? "TRUE" : "FALSE";
echo $b;


echo "<br />";
echo "<br />";

$i =1;

while ($i <= 20) {
  echo $i . '<br />';
  $i += 1;
}


echo "<br />";
echo "<br />";

$count =0;

while ($count < 20) {
    if($count % 3 == 0){
        $count+=1;
        continue;
    }
  echo $count . '<br />';
  $count += 1;
}

echo "<br />";
echo "<br />";

$num=0;

do {
    echo "num=" . $num .'<br />';
    $num +=1;

} while ($num <3);

echo "<br />";
echo "<br />";



for($num = 1; $num <=50; $num++){
    if($num % 3 ==0 and $num % 5 !== 0 ){
        echo "Fizz".'<br />';
    }

    elseif($num % 3 !== 0 and $num % 5 == 0 ){
        echo "Buzz".'<br />';
    }
    elseif($num % 3 == 0 and $num % 5 == 0 ){
        echo "FizzBuzz".'<br />';
    }
    else{
        echo "$num".'<br />';
    }
}