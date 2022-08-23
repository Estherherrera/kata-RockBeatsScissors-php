<?php

namespace App\Models;

use App\Models\Sign;

class Scissors extends Sign {

    public function __construct()
    {
        $this->choice = "Scissors";
    }
}