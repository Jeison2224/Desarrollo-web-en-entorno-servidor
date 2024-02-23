<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Contact;
class EmployeeController extends Controller
{
    //
    public function index() {
        $employeeList = Employee::all();
        return view('employee.all', ['employeeList'=>$employeeList]);
    }

    public function show($id) {
        $p = Employee::find($id);
        $data['employee'] = $p;
        return view('employee.show', $data);
    }

    public function create() {
        $Contacts = Employee::all();
        return view('employee.form', array('Contacts' => $Contacts));
    }

    public function store(Request $r) {
        $p = new Employee();
        $p->name = $r->name;
        $p->surname = $r->surname;
        $p->department = $r->department;
        $p->functions = $r->functions;
        $p->save();
        return redirect()->route('employee.index');
    }

    public function edit($id) {
        $employee = Employee::find($id);
        //$Contacts = Contact::all();
        return view('employee.form', array('employee' => $employee));
    }

    public function update($id, Request $r) {
        $p = Employee::find($id);
        $p->name = $r->name;
        $p->surname = $r->surname;
        $p->department = $r->department;
        $p->functions = $r->functions;
        $p->save();
        return redirect()->route('employee.index');
    }

    public function destroy($id) {
        $p = Employee::find($id);
        $p->delete();
        return redirect()->route('employee.index');
    }
}
