<?php

namespace IteratorPattern\Classes;

class AlphabeticalOrderIterator implements AbstractIterator
{
    /**
     * @var ClothesCollection
     */
    private $collection;

    private $position = 0;

    private $reverse = false;

    public function __construct(ClothesCollection $collection, bool $reverse = false)
    {
        $this->collection = $collection;
        $this->reverse = $reverse;
    }

    public function rewind()
    {
        $this->position = $this->reverse ?
            count($this->collection->getItems()) - 1 : 0;
    }

    public function current(): ClothesCollection
    {
        return $this->collection->getItems()[$this->position];
    }

    public function key(): int
    {
        return $this->position;
    }

    public function next(): void
    {
        $this->position = $this->position + ($this->reverse ? -1 : 1);
    }

    public function valid(): bool
    {
        return isset($this->collection->getItems()[$this->position]);
    }
}