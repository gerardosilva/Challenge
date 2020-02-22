<?php

namespace App;

use App\Validate\LinioValidate;
use App\Validate\ItValidate;
use App\Validate\LinianosValidate;
use App\Collection\Collection;

class Challenge
{
    const RANGE = 100;

    public function __construct(Collection $collection)
    {
        $this->collection = $collection;
        $this->collection->add(new LinioValidate());
        $this->collection->add(new ItValidate());
        $this->collection->add(new LinianosValidate());
    }

    public function getResult()
    {
        $numbers = [];
        for ($i = 1; $i <= self::RANGE; $i++) {
            $numbers[$i] = $this->collection->result($i);
        }
        return $numbers;
    }

}