<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news($id=1){
        return view('news');
    }
    public function news2(){
        return view('news2');
    }
    
}
