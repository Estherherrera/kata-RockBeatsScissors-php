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
        //Given.
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

public function test_scissors__wins_to_paper_return_Jugador1haGanado()
   {
     //Given
     $scissorsPaper = new RockPaperScissors;
     //When
     $result = $scissorsPaper->game('scissors', 'paper');

     //Then
     $this->assertEquals("Jugador '1' ha ganado", $result);
   }

   public function test_scissors__wins_to_paper_return_Jugador2haGanado()
   {
     //Given
     $paperScissors = new RockPaperScissors;
     //When
     $result = $paperScissors->game('paper', 'scissors');

     //Then
     $this->assertEquals("Jugador '2' ha ganado", $result);
   }

   public function test_rock__draw_with_rock_return_draw()
   {
     //Given
     $drawRock = new RockPaperScissors;
     //When
     $result = $drawRock->game('rock', 'rock');

     //Then
     $this->assertEquals("Empate", $result);
   }

   public function test_scissors__draw_with_scissors_return_draw()
   {
     //Given
     $drawScissors = new RockPaperScissors;
     //When
     $result = $drawScissors->game('scissors', 'scissors');

     //Then
     $this->assertEquals("Empate", $result);
   }

   public function test_paper__draw_with_paper_return_draw()
   {
     //Given
     $drawPaper = new RockPaperScissors;
     //When
     $result = $drawPaper->game('paper', 'paper');

     //Then
     $this->assertEquals("Empate", $result);
   }

}

