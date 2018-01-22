<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use App\link;

class LinksController extends Controller
{
    
    public function show($id)
    {
        $link = Link::findOrFail($id);
        return new RedirectResponse($link->url, 301);
    }


    public function create()
    {
        return view('links.create');
    }


    public function store()
    {   
        $url = Input::get('url');
        $link = Link::firstOrCreate(['url' => $url]);
        
        // dd($link);
        return view('links.success', compact('link'));
    }

}
