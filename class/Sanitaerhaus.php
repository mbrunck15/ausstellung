<?php

class Sanitaerhaus implements IFaeche
{
        private float $klo;



    /**
     * @param float $klo
     */
    public function __construct(float $klo)
    {
        $this->klo = $klo;
    }

    public function getKlo(): float
    {
        return $this->klo;
    }

    public function setKlo(float $klo): void
    {
        $this->klo = $klo;
    }

    public function getFlaeche():float {
        return $this->klo;
    }

}