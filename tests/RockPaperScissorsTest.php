<?php

namespace Tests;

use App\RockPaperScissors;
use PHPUnit\Framework\TestCase;

class RockPaperScissorsTest extends TestCase {
   public function test_rock__wins_to_scissors_return_Jugador1haGanado(){
        //Given
        $rockScissors = new RockPaperScissors;

        //When
        $result = $rockScissors->game('rock', 'scissors');

        //then
        $this->assertEquals("Jugador '1' ha ganado", $result);
   }

   public function test_rock__wins_to_scissors_return_Jugador2haGanado()
   {
        //Given
        $scissorsRock = new RockPaperScissors;

        //When
        $result = $scissorsRock->game('scissors', 'rock');

        $this->assertEquals("Jugador '2' ha ganado", $result);
   }

   public function test_paper__wins_to_rock_return_Jugador1haGanado()
   {
     //Given
     $paperRock = new RockPaperScissors;

     //When
     $result = $paperRock->game('paper', 'rock');

     //Then
     $this->assertEquals("Jugador '1' ha ganado", $result);
   }

   public function test_paper__wins_to_rock_return_Jugador2haGanado()
   {
     //given
     $rockPaper = new RockPaperScissors;

     //When
     $result = $rockPaper->game('rock', 'paper');

     //Then
     $this->assertEquals("Jugador '2' ha ganado", $result);


   }
}

