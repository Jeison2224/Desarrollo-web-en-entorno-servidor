<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LeadActor;

class LeadActorController extends Controller
{
    //
    public function index() {
        $leadactorList = LeadActor::all();
        return view('all', ['leadactorList'=>$leadactorList]);
    }

    public function show($id) {
        $p = LeadActor::find($id);
        $data['leadactor'] = $p;
        return view('leadactor.show', $data);
    }

    public function create() {
        return view('form');
    }

    public function store(Request $r) {
        $p = new LeadActor();
        $p->name = $r->name;
        $p->surname = $r->surname;
        $p->email = $r->movie_id;
        $p->save();
        return redirect()->route('leadactor.index');
    }

    public function edit($id) {
        $product = LeadActor::find($id);
        return view('form', array('leadactor' => $product));
    }

    public function update($id, Request $r) {
        $p = LeadActor::find($id);
        $p->name = $r->name;
        $p->surname = $r->surname;
        $p->email = $r->movie_id;
        $p->save();
        return redirect()->route('leadactor.index');
    }

    public function destroy($id) {
        $p = LeadActor::find($id);
        $p->delete();
        return redirect()->route('leadactor.index');
    }
}
