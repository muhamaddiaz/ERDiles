<?php

namespace App\Http\Controllers;


use App\Forum;
use App\Http\Requests\ForumRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Menampilkan seluruh forum diskusi

        $forum = Forum::all();

        return view('forum.index', [
            'forum' => $forum
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
    public function store(ForumRequest $request)
    {
        // Menyimpan data forum ke dalam database

        $forum = new Forum;

        $forum->judul = $request->judul;
        $forum->deskripsi = $request->deskripsi;

        $user = Auth::user();

        $user->forums()->save($forum);

        return back()->with('success', 'Forum berhasil diterbitkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Untuk melihat forum yang sudah dibuat
        $f = Forum::findOrFail($id);
        $user = $f->user()->first();
        return view('forum.show', [
            'forum' => $f,
            'user' => $user
        ]);
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
    public function update(ForumRequest $request, $id)
    {
        // Fungsi ini digunakan untuk memperbarui forum

        $forum = Forum::findOrFail($id);
        $forum->judul = $request->judul;
        $forum->deskripsi = $request->deskripsi;

        $forum->save();

        return back()->with('success', 'Forum berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Fungsi ini digunakan untuk menghapus forum

        Forum::findOrFail($id)->delete();

        return redirect()->route('forum.index')->with('success', 'Forum berhasil dihapus!');
    }
}
