<?php

namespace IteratorPattern\Classes;

use Cassandra\Type\Scalar;

interface AbstractIterator
{
    public function current();
    public function key();
    public function next();
    public function rewind();
    public function valid();
}