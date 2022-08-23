<?php

namespace Tests;

use App\Game;
use App\Models\Competitor;
use PHPUnit\Framework\TestCase;


class GameTest extends TestCase {
    public function test_competitor1_rock_competitor2_scissors()
    {
        //given
        $game = new Game;
        $c1 = new Competitor;
        $c2 = new Competitor;

        //When
        $c1->choose("Rock");
        $c2->choose("Scissors");
        $result = $game->gamble($c1, $c2);

        $this->assertEquals("Competitor 1 winner", $result);

    }
}