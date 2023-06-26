<?php

namespace Transport;

class Car extends Transport
{
    public function __construct(string $name, int $maxSpeed, private int $numDoors)
    {
        parent::__construct($name, $maxSpeed);
    }

    public function getInfo()
    {
        return "Name: {$this->name}, Speed: {$this->speed} km/h, Doors: {$this->numDoors}";
    }
    public function startEngine()
    {
        return "Starting the engine of {$this->name}";
    }

    /**
     * @return int
     */
    public function getNumDoors(): int
    {
        return $this->numDoors;
    }

    /**
     * @param int $numDoors
     * @return Car
     */
    public function setNumDoors(int $numDoors): Car
    {
        $this->numDoors = $numDoors;
        return $this;
    }


}