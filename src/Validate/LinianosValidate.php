<?php
namespace App\Validate;

class LinianosValidate implements Validate
{
    const RESULT = 'Linianos';

    /**
     * @param integer $number
     * @return bool
     */
    public function validate(int $number)
    {
        return ($number % 15 == 0);
    }

    /**
     * @return String
     */
    public function result()
    {
        return self::RESULT;
    }
}