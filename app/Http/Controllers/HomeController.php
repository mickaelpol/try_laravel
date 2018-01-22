<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $title = 'Accueil';
        return view('home', ['title' => $title]);
    }

    public function accueil()
    {
        $title = 'Accueil';
        return view('accueil', ['title' => $title]);
    }
}
