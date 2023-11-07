<?php


class Rundzelt implements IFaeche
{

    private float $radius;

    /**
     * @param int $radius
     */
    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    public function getRadius(): float
    {
        return $this->radius;
    }

    public function setRadius(int $radius): void
    {
        $this->radius = $radius;
    }
public function getFlaeche():float{

        return M_PI * $this->radius*$this->radius;
}

}