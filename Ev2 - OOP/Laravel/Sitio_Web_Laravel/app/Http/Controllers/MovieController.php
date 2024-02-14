<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    //
    public function index() {
        $movieList = Movie::all();
        return view('all', ['movieList'=>$movieList]);
    }

    public function show($id) {
        $p = Movie::find($id);
        $data['movie'] = $p;
        return view('movie.show', $data);
    }

    public function create() {
        return view('form');
    }

    public function store(Request $r) {
        $p = new Movie();
        $p->title = $r->title;
        $p->release_date = $r->release_date;
        $p->duration = $r->duration;
        $p->image = $r->image;
        $p->synopsis = $r->synopsis;
        $p->genre_id = $r->genre_id;
        $p->director_id = $r->director_id;
        $p->lead_actor_id = $r->lead_actor_id;
        $p->save();
        return redirect()->route('movie.index');
    }

    public function edit($id) {
        $product = Movie::find($id);
        return view('form', array('movie' => $product));
    }

    public function update($id, Request $r) {
        $p = Movie::find($id);
        $p->title = $r->title;
        $p->release_date = $r->release_date;
        $p->duration = $r->duration;
        $p->image = $r->image;
        $p->synopsis = $r->synopsis;
        $p->genre_id = $r->genre_id;
        $p->director_id = $r->director_id;
        $p->lead_actor_id = $r->lead_actor_id;
        $p->save();
        return redirect()->route('movie.index');
    }

    public function destroy($id) {
        $p = Movie::find($id);
        $p->delete();
        return redirect()->route('movie.index');
    }
}
