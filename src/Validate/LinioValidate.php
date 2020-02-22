<?php
namespace App\Validate;

class LinioValidate implements Validate
{
    const RESULT = 'Linio';

    /**
     * @param integer $number
     * @return bool
     */
    public function validate(int $number)
    {
        return ($number % 3 == 0);
    }

    /**
     * @return String
     */
    public function result()
    {
        return self::RESULT;
    }
}