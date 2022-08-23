<?php

namespace App\Models;

use App\Models\Sign;

class Paper extends Sign {

    public function __construct()
    {
        $this->choice = "Paper";
    }
}