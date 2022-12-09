<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{

    public function index(Request $request)
    {
        $employees=Employee::get();

        return view('employee.index',compact('employees'));
    }

    public function store(Request $request)
    {
        // $name=$request->name;
        // $addr=$request->address;

        $hashar=$request->all();
        // return $hashar;
        $image_path ="";
        // echo "<h1>".$name."</h1>";
        // echo "<h1>".$addr."</h1>";

        if($request->has('img')){
            $file_name = time();
            $picture=$request->img;
            // $file_name .= rand();
            $file_name = sha1($file_name);

            $original_name=$picture->getClientOriginalName();

            $ext = $picture->getClientOriginalExtension();    $file_name=$file_name . "." . $ext;
            $picture->move(public_path() . "/uploads/", $file_name);

            $image_path ='/uploads/'.$file_name;
        }
        $hashar['image']=$image_path;

        echo "<img src='".$image_path."'>";

        Employee::create($hashar);

        return redirect()->route('emp.index')->with('success',"Employee Created Successfully!");
    }

    public function create()
    {
        $employee=new Employee();
        return view('employee.create',compact('employee'));
    }
    public function edit($id)
    {
        $employee=Employee::find($id);
        // $employee=Employee::where('id',$id)->first();
        if(!$employee)
        return redirect()->back()->with('error','Employee not exists!');

        return view('employee.create',compact('employee'));
    }

    public function update(Request $request,$id)
    {
        // $name=$request->name;
        // $addr=$request->address;

        $employee=Employee::find($id);
        if(!$employee)
        return redirect()->back()->with('error','Employee not exists!');
        $hashar=$request->all();

        if($request->has('img')){
            $file_name = time();
            $picture=$request->img;
            // $file_name .= rand();
            $file_name = sha1($file_name);

            $original_name=$picture->getClientOriginalName();

            $ext = $picture->getClientOriginalExtension();    $file_name=$file_name . "." . $ext;
            $picture->move(public_path() . "/uploads/", $file_name);

            $image_path ='/uploads/'.$file_name;
            $hashar['image']=$image_path;
        }
        $employee->update($hashar);

        return redirect()->route('emp.index')->with('success',"Employee Update Successfully!");
    }

    public function delete($id)
    {
        $employee=Employee::find($id);
        if(!$employee)
        return redirect()->back()->with('error','Employee not exists!');
        $employee->delete();
        return redirect()->back()->with('success',"Employee delete Successfully!");
    }

}
