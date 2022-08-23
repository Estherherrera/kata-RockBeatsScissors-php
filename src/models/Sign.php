<?php

namespace App\Models;

abstract class Sign {
   
    private $choice;

    public function getChoice()
    {
        return $this->choice;
    }
}