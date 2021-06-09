<?php

?>

<!DOCTYPE html>
<html>
<head>
<title>PHP Opdrachten</title>
</head>
<body>
<?php

$tempCel=21;
$inputDev3=30;
$word="kever";

echo $tempCel."  degrees Celsius is ".Celsius2Far($tempCel). " degrees Fahrenheit";
echo "<br>";echo "<br>";
echo $inputDev3. " can be divided by 3? ".devby3($inputDev3);
echo "<br>";echo "<br>";
echo $word. " in reverse is ". reverseUno($word);

function Celsius2Far($tempCel){
    $tempCel=($tempCel*9/5)+32;
    return $tempCel;
}

function devby3($inputDev3){
    $inputDev3=$inputDev3/3;
    if (is_int($inputDev3)){
        return $inputDev3="true";
    } 
    else {
        return $inputDev3="false";
    }
}

function reverseUno($word){
    if (is_string($word)){
        return strrev($word);
    } 
    else {
        return $word="ERROR PLEASE INPUT A STRING";
    }
}

?>
</body>
</html>