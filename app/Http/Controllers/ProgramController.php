<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function program() {
        return view('program');
    }

    public function program1() {
        return view('program1');
    }

}
