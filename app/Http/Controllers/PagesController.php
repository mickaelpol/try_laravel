<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    // public function __construct()
    // {

    //     $this->middleware('auth');
        
    // }
    
    public function about()
    {
        $title = 'A propos';
        return view('pages/propos', ['title' => $title]);
    }

    public function contact()
    {
        $title = 'Contact';
        $numbers = [1,2,3,4,5,6,7,8,9,10];
        return view('pages/contact', compact('title', 'numbers'));
    }

}
