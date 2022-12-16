<?php

namespace App\Http\Controllers;

use App\Models\Salary;
use Illuminate\Http\Request;

class SalaryController extends Controller
{
    public function add($id)
    {
        return view('salary.edit',compact('id'));
    }

    public function store(Request $request,$id)
    {
        $data=$request->all();

        $data['emp_id']=$id;

        Salary::create($data);

        return redirect()->route('emp.index')->with('success','You have paid success');
    }
}
