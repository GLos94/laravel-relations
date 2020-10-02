<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Location;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){

      $emps = Employee::all();

      return view('emp-index', compact('emps'));
    }

    public function show($id){

      $emp = Employee::findOrFail($id);

      return view('emp-show', compact('emp'));
    }

    public function create(){

      $locs = Location::all();

      return view('emp-create', compact('locs'));
    }

    public function store(Request $request){

      $data = $request -> all();
      Employee::create($data);

      return redirect() -> route('emp.index');
    }
}
