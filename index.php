<?php


spl_autoload_register(function ($className){
    include 'class/' . $className . '.php';
});

$grundflaeche=new Rechteckzelt(2,3);
$grundflaeche1=new Rechteckzelt(11,13);
$rundzelt = new Rundzelt(6);
$sechseckzelt = new Sechseckzelt(7);


echo $grundflaeche->getFlaeche();
echo '<br>';
echo $grundflaeche1->getFlaeche();
echo '<br>';
echo $rundzelt->getFlaeche();
echo '<br>';
echo $sechseckzelt->getFlaeche();
echo '<br>';
echo $gesamt=$grundflaeche->getFlaeche()+$grundflaeche1->getFlaeche()+$rundzelt->getFlaeche()*2+$sechseckzelt->getFlaeche();
echo '<br>';

$a = new Ausstellungsflaeche();//aufruf von standart constructors der in classen standart ist.
// metode aufrufen

$a->erstelletestdaten();

echo '<pre>';
print_r($a);
echo '</pre>';

echo $a->getGesamtflaeche();

?>

