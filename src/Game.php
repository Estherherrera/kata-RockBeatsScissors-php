<?php

namespace App;

class Game {

    public function gamble($c1, $c2) : string
    {
        if($c1->getSign()->getChoice() == "Rock" && $c2->getSign()->getChoice() == "Scissors"){

            return "Competitor 1 winner";
        }
    }

}