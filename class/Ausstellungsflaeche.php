<?php


class Ausstellungsflaeche
{
    //in dieses Attribut sollen Zelte hinein
    private array $zelte=[];

    //erstelle hier kein constucter, da ich sonst alle Zelte außerhalb der klasse erstellen muß.

    public function erstelletestdaten()
    {
        //Ausführlich
        $this->zelte[]=new Rechteckzelt(2,3);
        $this->zelte[]=new Rechteckzelt(11,13);
        $this->zelte[]=new Rundzelt(6);
        $this->zelte[]=new Rundzelt(6);
        $this->zelte[]=new Sechseckzelt(7);
    }

    public function getGesamtflaeche():float{

        $gesamtflaeche=0;
        foreach ($this->zelte as $zelt) {
            $gesamtflaeche+=$zelt->getFlaeche();

        }
        return $gesamtflaeche;
    }


}