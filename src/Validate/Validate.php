<?php
namespace App\Validate;

interface Validate
{
    /**
     * @param int $number
     * @return bool
     */
    public function validate(int $number);

    /**
     * @return String
     */
    public function result();
}