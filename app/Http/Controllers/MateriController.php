<?php

namespace App\Http\Controllers;

use App\Materi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    public function materi1() {
        Auth::user()->materi_id = 1;
        Auth::user()->save();
        return view('materi.materi1');
    }

    public function materi2() {
        Auth::user()->materi_id = 2;
        Auth::user()->save();
        return view('materi.materi2');
    }

    public function materi3() {
        Auth::user()->materi_id = 3;
        Auth::user()->save();
        return view('materi.materi3');
    }

    public function materi4() {
        Auth::user()->materi_id = 4;
        Auth::user()->save();
        return view('materi.materi4');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Menampilkan seluruh isi materi

        $materi = Materi::all();

        return view('materi.index', [
            'materi' => $materi
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
