<?php

$x=2;
$y=100;
$z=$x*$y;
echo  'متر به سانتی متر'.'<br>';
echo "$x m => $z cm <br>";
echo '<br>';

$X=2;
$Y=3.28084;
$Z=$X*$Y;
echo 'متر به فوت'.'<br>';
echo "$X m => $Z foot";

echo '<br>';
echo '<br>';

$x=5;
$y=8;
$z=$x*$y;
$c=2*($x+$y);
echo 'مساحت و محیط مستطیل '.'<br>';
echo " مساحت =>$z <br>  محیط => $c";

echo '<br>';
echo '<br>';

$m=1;
echo 'if else'.'<br>';
if ($m>=10){
    echo 'به شما تبریک میگوییم'.'<br>'.'نمره شما = '. $m;
} else{
    echo 'نیاز به تلاش بیشتر دارید'.'<br>'.'نمره شما = '. $m;
}
echo '<br>';
echo '<br>';


$x=27;
$y=9;
$key='-';
echo 'switch'.'<br>';
switch ($key) {

    case '/':echo "$x / $y = ".$x / $y;break;
    case '+':echo "$x + $y = ".$x + $y;break;
    case '-':echo "$x - $y = ".$x - $y;break;
    case '*':echo "$x * $y = ".$x * $y;break;
    case '**':echo "$x ** $y = ".$x ** $y;break;

}























