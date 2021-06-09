<?php
session_start();
echo "Administration <br>";

if (isset($_SESSION['user']) && $_SESSION["admin"]){
    echo "<h1> Welkom Admin</h1>";
    echo "<a href='login.php?loguit'>Log uit</a>";
}

else {
    echo 'you do not have enough permission to view this webpage';
}