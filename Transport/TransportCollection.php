<?php

namespace Transport;

class TransportCollection implements \Iterator
{

    public function __construct(public array $transport)
    {}

    public function current(): mixed
    {
        return current($this->transport);
    }

    public function next(): void
    {
        next($this->transport);
    }

    public function key(): mixed
    {
        return key($this->transport);
    }

    public function valid(): bool
    {
        return current($this->transport) !== false;
    }

    public function rewind(): void
    {
        reset($this->transport);
    }
}