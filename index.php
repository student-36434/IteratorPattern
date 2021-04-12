<?php

include_once __DIR__ . '\Classes\СlothesCollection.php';
include_once __DIR__ . '\Classes\AbstractCollection.php';
include_once __DIR__ . '\Classes\AbstractIterator.php';
include_once __DIR__ . '\Classes\AlphabeticalOrderIterator.php';

use IteratorPattern\Classes\ClothesCollection;

$clothesCollection = new ClothesCollection();
$clothesCollection->addItem("Trousers");
$clothesCollection->addItem("Jacket");
$clothesCollection->addItem("Coat");

echo "Straight traversal:" . '<br>';
foreach ($clothesCollection->getIterator() as $item) {
    echo $item . '<br>';
}

echo '<br>';

echo "Reverse traversal:" . '<br>';
foreach ($clothesCollection->getReverseIterator() as $item) {
    echo $item . '<br>';
}

