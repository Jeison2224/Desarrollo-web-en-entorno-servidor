<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Writer;

class WriterController extends Controller
{
    //
    public function index() {
        $writerList = Writer::all();
        return view('all', ['writerList'=>$writerList]);
    }

    public function show($id) {
        $p = Writer::find($id);
        $data['writer'] = $p;
        return view('writer.show', $data);
    }

    public function create() {
        return view('form');
    }

    public function store(Request $r) {
        $p = new Writer();
        $p->name = $r->name;
        $p->surname = $r->surname;
        $p->email = $r->movie_id;
        $p->save();
        return redirect()->route('writer.index');
    }

    public function edit($id) {
        $product = Writer::find($id);
        return view('form', array('writer' => $product));
    }

    public function update($id, Request $r) {
        $p = Writer::find($id);
        $p->name = $r->name;
        $p->surname = $r->surname;
        $p->email = $r->movie_id;
        $p->save();
        return redirect()->route('writer.index');
    }

    public function destroy($id) {
        $p = Writer::find($id);
        $p->delete();
        return redirect()->route('writer.index');
    }
}
