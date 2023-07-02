<?php

namespace Transport;

class Bicycle extends Transport
{
    public function __construct(string $name, int $maxSpeed, private int $numGears)
    {
        parent::__construct($name, $maxSpeed);
    }

    public function getInfo()
    {
        parent::getInfo();
        return " Number Gears: {$this->numGears}";
    }

    public function ringBell()
    {
        return "Ring the bell on {$this->name}!";
    }

    /**
     * @return int
     */
    public function getNumGears(): int
    {
        return $this->numGears;
    }

    /**
     * @param int $numGears
     * @return Bicycle
     */
    public function setNumGears(int $numGears): Bicycle
    {
        $this->numGears = $numGears;
        return $this;
    }

}