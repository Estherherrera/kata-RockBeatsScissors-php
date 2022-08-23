<?php

namespace App\Models;

use App\Models\Scissors;
use PHPUnit\Framework\TestCase;

class ScissorsTest extends TestCase
{
    public function test_scissors(){
        $scissors = new Scissors;

        $result = $scissors->getChoice();

        $this->assertEquals("Scissors", $result);
    }
}