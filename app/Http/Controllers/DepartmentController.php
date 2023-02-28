<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index(Request $request)
    {
        $departments=Department::paginate(10);

        return view('departments.index',compact('departments'));
    }

    public function store(Request $request)
    {
        // $name=$request->name;
        // $addr=$request->address;

        $hashar=$request->all();
        Department::create($hashar);

        return redirect()->route('departments.index')->with('success',"Department Created Successfully!");
    }

    public function create()
    {
        $department=new Department();
        return view('departments.create',compact('department'));
    }
    public function edit($id)
    {
        $department=Department::find($id);
        // $employee=Employee::where('id',$id)->first();
        if(!$department)
        return redirect()->back()->with('error','Department not exists!');

        return view('departments.create',compact('department'));
    }

    public function update(Request $request,$id)
    {
        // $name=$request->name;
        // $addr=$request->address;

        $department=Department::find($id);
        if(!$department)
        {
            return redirect()->back()->with('error','Department not exists!');
        }

        $hashar=$request->all();
        $department->update($hashar);

        return redirect()->route('departments.index')->with('success',"Department Update Successfully!");
    }

    public function delete($id)
    {
        $department=Department::find($id);
        if(!$department)
        return redirect()->back()->with('error','Department not exists!');

        $department->delete();
        return redirect()->back()->with('success',"Department delete Successfully!");
    }
}
