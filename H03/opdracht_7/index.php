<?php

?>

<!DOCTYPE html>
<html>
<head>
<title>PHP Opdrachten</title>
</head>
<body>
<?php

print("De volgende momenten zijn nog beschikbaar:<ul>");
foreach($kappersagenda as $afspraak=> $tijd) {
if($afspraak == "") {
print("<li>".$tijd."</li>");
}
}
print("</ul>");

?>
</body>
</html>