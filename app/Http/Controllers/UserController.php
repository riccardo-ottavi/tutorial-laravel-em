<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function calcTotal () {
        $calcolo = 5 + 5;
        return $calcolo;
    }
}
