<?php


class Rechteckzelt implements IFaeche
{

    private int $breite;
    private int $laenge;

    public function __construct(int $breite,int $laenge)
    {


        $this->breite = $breite;
        $this->laenge=$laenge;

}

    public function getBreite(): int
    {
        return $this->breite;
    }

    public function setBreite(int $breite): void
    {
        $this->breite = $breite;
    }

    public function getLaenge(): int
    {
        return $this->laenge;
    }

    public function setLaenge(int $laenge): void
    {
        $this->laenge = $laenge;
    }


    function getFlaeche():float {

        return $this->laenge*$this->breite;

    }



}
