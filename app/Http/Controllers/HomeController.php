<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todo;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $todos = \App\Models\todo::where('user_id' , auth()->id())->get();

        return view('home' , ['todos' => $todos]);
    }
}
