<?php

namespace app;

class RockPaperScissors {
    public function game(string $j1, string $j2 ) : string 
    {
        $player = "Jugador '1' ha ganado";
        if($j1== 'rock' && $j2 == 'scissors'){
            return $player;
        }
        if($j1 == 'paper' && $j2 == 'rock'){
            return $player;
        }
        return "Jugador '2' ha ganado";

    }
}