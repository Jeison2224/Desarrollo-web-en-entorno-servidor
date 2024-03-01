<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Genre;
use Carbon\Carbon;

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
        return view('movie.index', $data);
    }

    public function getPelis() {
        $genres = Genre::all();
        $movies = Movie::all();
        return view('index', array('movies' => $movies,'genres' => $genres));
    }

    public function getPeli($id) {
        $movie = Movie::with('director', 'leadActor', 'writers', 'genre')->find($id);
        $genres = Genre::all();
        $movies = Movie::all();
    
        return view('peli', compact('movie', 'genres', 'movies'));
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
        $movie = Movie::find($id);
        return view('form', array('movie' => $movie));
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

    public function proximosEstrenos() {
        $fechaActual = Carbon::now()->format('Y-m-d');
        $genres = Genre::all();
        $movies = Movie::all();

        // Obtener películas con fecha de estreno a partir de hoy
        $proximosEstrenos = Movie::where('release_date', '>=', $fechaActual)->get();

        return view('proximos-estrenos', compact('proximosEstrenos', 'genres', 'movies'));
    }

    public function ultimasNovedades() {
        $fechaInicio = Carbon::createFromDate(2024-1-1)->toDateString();
        $fechaActual = Carbon::now()->toDateString();
        $genres = Genre::all();
        $movies = Movie::all();

        // Obtener películas desde el 01/01/2024 hasta la fecha actual
        $ultimasNovedades = Movie::whereBetween('release_date', [$fechaInicio, $fechaActual])->get();

        return view('ultimas-novedades', compact('ultimasNovedades', 'genres', 'movies'));
    }
}
