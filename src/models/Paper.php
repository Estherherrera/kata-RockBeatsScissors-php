<?php

namespace App\Models;

use App\Models\sign;

class Paper extends sign {

    public function __construct()
    {
        $this->choice = "Paper";
    }
}