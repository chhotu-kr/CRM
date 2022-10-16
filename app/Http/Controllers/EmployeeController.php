<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Company;
class EmployeeController extends Controller
{
    //

    public function index(){
       
        $data['emp']=Employee::all();
        $data['company']=Company::all();
         return view('employee.manageEmployee',$data);
    }

    public function create(){
        $data['emp']=Employee::all();
        $data['company']=Company::all();
        return view('employee.insertEmployee',$data);
    }

    public function store(Request $request){
        $request->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'companies_id'=>'required',
            'email'=>'required',
            'phone'=>'required',
        ]);
        $data= new Employee();
        $data->firstname=$request->firstname;
        $data->lastname=$request->lastname;
        $data->companies_id=$request->companies_id;
        $data->email=$request->email;
        $data->phone=$request->phone;

        $data->save();

        return redirect()->route('manage.employee');

    }

    public function edit($id){
        $data['emp']=Employee::find($id);
        $data['company']=Company::all();
        return view('employee.editemployee',$data);
    }

    public function update(Request $request,$id){
        $emp= Employee::find($id);
        $emp->firstname=$request->firstname;
        $emp->lastname=$request->lastname;
        $emp->companies_id=$request->companies_id;
        $emp->email=$request->email;
        $emp->phone=$request->phone;

        $emp->save();

        return redirect()->route('manage.employee');
    }

    public function destroy($id){
        $emp= Employee::find($id);
        $emp->delete();
        
        return redirect()->route('manage.employee');
    }

    public function dashboard(){
        $data['emp']=Employee::all();
        $data['company']=Company::all();
        return view('employee.dashboard',$data);
    }
}
