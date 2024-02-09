<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    //
    public function index() {
        $contactList = Contact::all();
        return view('all', ['contactList'=>$contactList]);
    }

    public function show($id) {
        $p = Contact::find($id);
        $data['contact'] = $p;
        return view('contact.show', $data);
    }

    public function create() {
        return view('form');
    }

    public function store(Request $r) {
        $p = new Contact();
        $p->name = $r->name;
        $p->surname = $r->surname;
        $p->email = $r->email;
        $p->phone_number = $r->phone_number;
        $p->supplier_id = $r->supplier_id;
        $p->save();
        return redirect()->route('contact.index');
    }

    public function edit($id) {
        $product = Contact::find($id);
        return view('form', array('contact' => $product));
    }

    public function update($id, Request $r) {
        $p = Contact::find($id);
        $p->name = $r->name;
        $p->surname = $r->surname;
        $p->email = $r->email;
        $p->phone_number = $r->phone_number;
        $p->supplier_id = $r->supplier_id;
        $p->save();
        return redirect()->route('contact.index');
    }

    public function destroy($id) {
        $p = Contact::find($id);
        $p->delete();
        return redirect()->route('contact.index');
    }
}
