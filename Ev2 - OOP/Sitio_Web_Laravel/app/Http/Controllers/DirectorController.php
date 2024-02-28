<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Director;

class DirectorController extends Controller
{
    //
    public function index() {
        $directorList = Director::all();
        return view('all', ['directorList'=>$directorList]);
    }

    public function show($id) {
        $p = Director::find($id);
        $data['director'] = $p;
        return view('director.show', $data);
    }

    public function create() {
        return view('form');
    }

    public function store(Request $r) {
        $p = new Director();
        $p->name = $r->name;
        $p->surname = $r->surname;
        $p->email = $r->movie_id;
        $p->save();
        return redirect()->route('director.index');
    }

    public function edit($id) {
        $product = Director::find($id);
        return view('form', array('director' => $product));
    }

    public function update($id, Request $r) {
        $p = Director::find($id);
        $p->name = $r->name;
        $p->surname = $r->surname;
        $p->email = $r->movie_id;
        $p->save();
        return redirect()->route('director.index');
    }

    public function destroy($id) {
        $p = Director::find($id);
        $p->delete();
        return redirect()->route('director.index');
    }

}
