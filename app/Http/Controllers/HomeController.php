<?php

namespace App\Http\Controllers;

use App\Forum;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forum = Forum::orderBy('created_at', 'desc')->limit(3)->get();
        return view('home', [
            'forum' => $forum
        ]);
    }
}
