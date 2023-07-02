<?php

namespace Transport;

class Boat extends Transport
{
    public function __construct(string $name, int $maxSpeed, private int $maxPassengers)
    {
        parent::__construct($name, $maxSpeed);
    }

    public function getInfo()
    {
        parent::getInfo();
        return " Passengers: {$this->maxPassengers}";
    }

    public function sail()
    {
        return "Sailing with {$this->maxPassengers} passengers on {$this->name}!";
    }

    /**
     * @return int
     */
    public function getMaxPassengers(): int
    {
        return $this->maxPassengers;
    }

    /**
     * @param int $maxPassengers
     * @return Boat
     */
    public function setMaxPassengers(int $maxPassengers): Boat
    {
        $this->maxPassengers = $maxPassengers;
        return $this;
    }


}