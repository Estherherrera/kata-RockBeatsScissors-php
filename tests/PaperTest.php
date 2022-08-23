<?php

namespace App\Models;

use App\Models\Paper;
use PHPUnit\Framework\TestCase;

class PaperTest extends TestCase
{
    public function test_paper(){
        $paper = new Paper;

        $result = $paper->getChoice();

        $this->assertEquals("Paper", $result);
    }
}