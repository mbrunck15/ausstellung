<?php
include "class/Rechteckzelt.php";
include "class/Rundzelt.php";
include "class/Sechseckzelt.php";


$grundflaeche= new \class\Rechteckzelt(400,300);
$rundzelt = new \class\Rundzelt(200);
$sechseckzelt = new \class\Sechseckzelt(30);

echo $grundflaeche->getFlaeche();
echo '<br>';
echo $rundzelt->getFlaeche();
echo '<br>';
echo $grundflaeche->getFlaeche();
?>