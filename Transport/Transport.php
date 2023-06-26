<?php

namespace Transport;
class Transport
{
    public function __construct(
        protected string $name,
        protected int $speed
    ) {
    }

    public function getInfo() {
        return "Name: {$this->name}, Speed: {$this->speed} km/h";
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Transport
     */
    public function setName(string $name): Transport
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return int
     */
    public function getSpeed(): int
    {
        return $this->speed;
    }

    /**
     * @param int $speed
     * @return Transport
     */
    public function setSpeed(int $speed): Transport
    {
        $this->speed = $speed;
        return $this;
    }

    public function className()
    {
        return get_class($this);
    }

}

