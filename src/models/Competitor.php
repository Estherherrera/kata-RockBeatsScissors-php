<?php

namespace App\Models;

class Competitor{

    private $sign;
   
    public function getSign()
    {
        return $this->sign;
    }

    public function choose (string $sign)
    {
        if($sign == "Paper"){
            $this->sign = new Paper;
        }

        if($sign == "Rock"){
            $this->sign = new Rock;
        }
        
        if($sign == "Scissor"){
            $this->sign = new Scissors;
        }
    }
}