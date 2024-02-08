<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index() {
        $supplierList = Supplier::all();
        return view('all', ['supplierList'=>$supplierList]);
    }

    public function show($id) {
        $p = Supplier::find($id);
        $data['supplier'] = $p;
        return view('supplier.show', $data);
    }

    public function create() {
        return view('form');
    }

    public function store(Request $r) {
        $p = new Supplier();
        $p->name = $r->name;
        $p->addres = $r->addres;
        $p->city = $r->city;
        $p->country = $r->country;
        $p->save();
        return redirect()->route('product.index');
    }

    public function edit($id) {
        $supplier = Supplier::find($id);
        return view('form', array('supplier' => $supplier));
    }

    public function update($id, Request $r) {
        $p = Supplier::find($id);
        $p->name = $r->name;
        $p->addres = $r->addres;
        $p->city = $r->city;
        $p->country = $r->country;
        $p->save();
        return redirect()->route('supplier.index');
    }

    public function destroy($id) {
        $p = Supplier::find($id);
        $p->delete();
        return redirect()->route('supplier.index');
    }

}
