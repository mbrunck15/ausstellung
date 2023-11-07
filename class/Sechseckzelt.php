<?php

namespace class;

class Sechseckzelt
{
    private int $seitenlaege;

    /**
     * @param int $seitenlaege
     */
    public function __construct(int $seitenlaege)
    {
        $this->seitenlaege = $seitenlaege;
    }

    public function getSeitenlaege(): int
    {
        return $this->seitenlaege;
    }

    public function setSeitenlaege(int $seitenlaege): void
    {
        $this->seitenlaege = $seitenlaege;
    }

    public function getFlaeche():float{

        return (3*sqrt(3))/2 * $this->seitenlaege*$this->seitenlaege;
    }

}