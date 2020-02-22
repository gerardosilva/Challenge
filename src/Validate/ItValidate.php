<?php
namespace App\Validate;

class ITValidate implements Validate
{
    const RESULT = 'IT';

    /**
     * @param integer $number
     * @return bool
     */
    public function validate(int $number)
    {
        return ($number % 5 == 0);
    }

    /**
     * @return String
     */
    public function result()
    {
        return self::RESULT;
    }
}