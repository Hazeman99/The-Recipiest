<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Recipe;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if( auth()->user() ){
            $user = auth()->user()->id;
        }else{
            $user = null;
        }
        $recipes = Recipe::all();
        return view('home', compact('recipes', 'user'));
    }

    public function about(){
        if( auth()->user() ){
            $user = auth()->user()->id;
        }else{
            $user = null;
        }
        return view('about', compact('user'));
    }
}
