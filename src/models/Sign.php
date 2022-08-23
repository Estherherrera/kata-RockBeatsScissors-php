<?php

namespace App\Models;

abstract class Sign {
   
    protected $choice;

    public function getChoice()
    {
        return $this->choice;
    }
}