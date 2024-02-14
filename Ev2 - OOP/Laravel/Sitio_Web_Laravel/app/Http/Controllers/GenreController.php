<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;

class GenreController extends Controller
{
    //
    public function index() {
        $genreList = Genre::all();
        return view('all', ['genreList'=>$genreList]);
    }

    public function show($id) {
        $p = Genre::find($id);
        $data['genre'] = $p;
        return view('genre.show', $data);
    }

    public function create() {
        return view('form');
    }

    public function store(Request $r) {
        $p = new Genre();
        $p->genre = $r->genre;
        $p->save();
        return redirect()->route('genre.index');
    }

    public function edit($id) {
        $product = Genre::find($id);
        return view('form', array('genre' => $product));
    }

    public function update($id, Request $r) {
        $p = Genre::find($id);
        $p->genre = $r->genre;
        $p->save();
        return redirect()->route('genre.index');
    }

    public function destroy($id) {
        $p = Genre::find($id);
        $p->delete();
        return redirect()->route('genre.index');
    }
}
