<?php

namespace App\Models;

use App\Models\Rock;
use PHPUnit\Framework\TestCase;

class RockTest extends TestCase
{
    public function test_rock(){
        $rock = new Rock;

        $result = $rock->getChoice();
        
        $this->assertEquals('Rock', $result);
    }
}