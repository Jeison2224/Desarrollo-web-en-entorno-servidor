<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Product;
use App\Models\Supplier;
use App\Models\Contact;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function showForm(){
        $employees = Employee::all();
        $products = Product::all();
        return view('order.form', ['employees'=>$employees, 'products'=>$products]);
    }

    public function showResume(Request $r){
        $employee = Employee::find($r->employee_id);
        $product = Product::find($r->product);
        $supplier = Supplier::all();
        $contact = Contact::find($r->contact);
        $amount = $r->cantidad;
        return view('order.resume', ['employee'=>$employee, 'product'=>$product, 'amount'=>$amount, 'supplier'=>$supplier, 'contact'=>$contact]);
    }

    public function showAll() {
        $orderList = Order::all();
        $employee = Employee::all();
        $product = Product::all();
        $supplier = Supplier::all();
        return view('order.all', ['orderList'=>$orderList, 'employee'=>$employee, 'product'=>$product, 'supplier'=>$supplier]);
    }

    public function edit($id) {
        $order = Order::find($id);
        return view('order.form', ['order'=>$order]);
    }

    public function destroy($id) {
        $p = Order::find($id);
        $p->delete();
        return redirect()->route('order.index');
    }

    public function update($id, Request $r) {
        $e = Order::find($id);
        $e->name = $r->name;
        $e->surname = $r->surname;
        $e->department = $r->department;
        $e->functions = $r->functions;
        $e->save();
        return redirect()->route('order.index');
    }

    public function create() {
        return view('order.form');
    }
}
