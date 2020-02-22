<?php

namespace App\Test;

use PHPUnit\Framework\TestCase;
use App\Challenge;
use App\Collection\ValidateCollection;

class ChallengeTest extends TestCase
{
    /** @var  challenge */
    private $challenge;

    /** @test */
    public function test_a_number_divisible_by_three_is_Linio()
    {
        $this->assertEquals('Linio', $this->challenge->getResult()[3]);
    }

    /** @test */
    public function test_a_number_divisible_by_five_is_IT()
    {
        $this->assertEquals('IT', $this->challenge->getResult()[5]);
    }

    /** @test */
    public function test_a_number_divisible_by_three_and_five_is_Linianos()
    {
        $this->assertEquals('Linianos', $this->challenge->getResult()[15]);
    }

    /** @test */
    public function test_a_number_not_divisible_by_three_and_five()
    {
        $this->assertEquals(1, $this->challenge->getResult()[1]);
    }

    protected function configure()
    {
        parent::configure();
        $this->challenge = new Challenge(new ValidateCollection());
    }
}