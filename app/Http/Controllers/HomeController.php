<?php

namespace App\Http\Controllers;

use App\Forum;
use App\Materi;
use Illuminate\Support\Facades\Auth;
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
        if($id = Auth::user()->materi_id) {
            $materi = Materi::findOrFail($id);
        } else {
            $materi = null;
        }
        $forum = Forum::orderBy('created_at', 'desc')->limit(3)->get();
        return view('home', [
            'forum' => $forum,
            'materi' => $materi
        ]);
    }

    public function staticpages() {
        return view('staticpages.index');;
    }
}
