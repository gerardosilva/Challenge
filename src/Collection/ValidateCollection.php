<?php
namespace App\Collection;

use App\Validate\Validate;

class ValidateCollection implements Collection
{
    private $_validations;

    /**
     * @param integer $number
     * @return string $value
     */
    public function result(int $number)
    {
        $value = $number;
    
        foreach ($this->_validations as $validate) {
            if ($validate->validate($number)) {
                $value = $validate->result();
            }
        }
        return $value;
    }

    public function add(Validate $validate)
    {
        $this->_validations[] = $validate;
    }
}