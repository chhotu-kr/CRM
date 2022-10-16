<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
class CompanyController extends Controller
{
    //
    public function index(){
        $data['company']=Company::all();
    return view('company.manageCompany',$data);
    }

    public function create(){
        $data['company']=Company::all();
        return view('company.insertCompany');
    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'logo'=>'required',
            'website'=>'required',
            
        ]);

        $data= new Company();
        $data->name=$request->name;
        $data->email=$request->email;
        $filename = $request->logo->getClientOriginalName();
        $request->logo->move(('images'),$filename);
        $data->logo = $filename;
        $data->website=$request->website;

        $data->save();

        return redirect()->route('manage.company');
    }

    public function edit($id){

        $data['company']=Company::find($id);

        return view('company.editCompany',$data);

    }

    public function update(Request $request,$id){
        $comp=Company::find($id);
        $comp->name=$request->name;
        $comp->email=$request->email;
        $filename = $request->logo->getClientOriginalName();
        $request->logo->move(('images'),$filename);
        $comp->logo = $filename;
        $comp->website=$request->website;

        $comp->save();

        return redirect()->route('manage.company');
    }

    public function destroy($id){
        $comp=Company::find($id);
        $comp->delete();
        return redirect()->route('manage.company');
    }

    
}
