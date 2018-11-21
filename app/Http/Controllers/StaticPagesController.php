<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    // untuk mendefinisikan aksi dari index satatic paghes

    public function staticpages() {
        return view('staticpages.index');
    }
}
