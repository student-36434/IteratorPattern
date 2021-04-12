<?php

namespace IteratorPattern\Classes;

include_once __DIR__ . '\AbstractCollection.php';

class ClothesCollection implements AbstractCollection
{
    private $items = [];

    public function getItems(): array
    {
        return $this->items;
    }

    public function addItem($item)
    {
        $this->items[] = $item;
    }

    public function getIterator(): AlphabeticalOrderIterator
    {
        return new AlphabeticalOrderIterator($this);
    }

    public function getReverseIterator(): AlphabeticalOrderIterator
    {
        return new AlphabeticalOrderIterator($this, true);
    }
}