<?php


class Sechseckzelt implements IFaeche
{
    private float $seitenlaege;

    /**
     * @param int $seitenlaege
     */
    public function __construct(float $seitenlaege)
    {
        $this->seitenlaege = $seitenlaege;
    }

    public function getSeitenlaege(): float
    {
        return $this->seitenlaege;
    }

    public function setSeitenlaege(float $seitenlaege): void
    {
        $this->seitenlaege = $seitenlaege;
    }

    public function getFlaeche():float{

        return (3*sqrt(3))/2 * $this->seitenlaege*$this->seitenlaege;
    }

}