<?php
if ($_POST['email']=="piet@worldonline.nl"&& $_POST['wachtwoord']=='doetje123') {
    echo '<h1>Welkom Piet</h1>';
    $login=true;
    echo $login;
}
if ($_POST['email']=="klaas@carpets.nl"&& $_POST['wachtwoord']=='snoepje777') {
    echo '<h1>Welkom Klaas</h1>';
    $login=true;
    echo $login;
}
if ($_POST['email']=="truushendriks@wegweg.nl"&& $_POST['wachtwoord']=='arkiearkie201') {
    echo '<h1>Welkom Truus</h1>';
    $login=true;
    echo $login;
}
else {
    echo "<h1>Sorry geen toegang</h1>";
    $login=false;
    echo $login;
};