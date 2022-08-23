<?php

namespace App\Models;

use App\Models\Sign;

class Rock extends Sign {
    public function __construct()
    {
        $this->choice = "Rock";
    }
}