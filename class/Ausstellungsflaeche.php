<?php


class Ausstellungsflaeche
{
    //in dieses Attribut sollen Zelte hinein
    private array $gebaeude=[];

    //erstelle hier kein constucter, da ich sonst alle Zelte außerhalb der klasse erstellen muß.

    public function erstelletestdaten()
    {
        //Ausführlich
        $this->gebaeude[]=new Rechteckzelt(2,3);
        $this->gebaeude[]=new Rechteckzelt(11,13);
        $this->gebaeude[]=new Rundzelt(6);
        $this->gebaeude[]=new Rundzelt(6);
        $this->gebaeude[]=new Sechseckzelt(7);
        $this->gebaeude[]=new Sanitaerhaus(25);
    }


    public function getGesamtflaeche():float{

        $gesamtflaeche=0;
        foreach ($this->gebaeude as $einzelgebaeude) {
            $gesamtflaeche+=$einzelgebaeude->getFlaeche();

        }
        return $gesamtflaeche;
    }


}