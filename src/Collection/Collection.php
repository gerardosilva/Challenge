<?php

namespace App\Collection;

use App\Validate\Validate;

interface Collection
{
    /**
     * @param integer $number
     * @return string
     */
    public function result(int $number);

    public function add(Validate $validate);
}