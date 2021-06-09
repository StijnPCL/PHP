<?php

?>

<!DOCTYPE html>
<html>
<head>
<title>PHP Opdrachten</title>
</head>
<body>
<?php

$alle["De Spartelkuikens "] = "25 <img src='img/swimicon.png'> <img src='img/swimicon.png'> <img src='img/swimicon.png'> <img src='img/swimicon.png'> <img src='img/swimicon.png'>";
$alle["De Water buffels "] = "32 <img src='img/swimicon.png'> <img src='img/swimicon.png'> <img src='img/swimicon.png'> <img src='img/swimicon.png'> <img src='img/swimicon.png'> <img src='img/swimicon.png'>";
$alle["Plonsmdrerin "] = "11 <img src='img/swimicon.png'> <img src='img/swimicon.png'>";
$alle["Bommetje "] = "23 <img src='img/swimicon.png'> <img src='img/swimicon.png'> <img src='img/swimicon.png'> <img src='img/swimicon.png'>";
$totaal= 25+32+11+23;
$i=0;

foreach ($alle as $label => $waarde) {
    echo $label.$waarde."<br>";
}

?>
</body>
</html>