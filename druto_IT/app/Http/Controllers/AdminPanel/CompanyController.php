<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Company_Detail;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index(){
        $company = Company_Detail::where('id','=',1)->get();
        // return $company;
        return view('AdminPanel.company.company',
        ['company'=>$company]);
    // }
    }

    public function add(){
        
        // return $company;
        return view('AdminPanel.company.add_company');
    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'description'=>'required'
        ]);

        $company = new Company_Detail();

        $company->name = $request->name;
        $company->description = $request->description;
        $company->save();

        return redirect('admin/company')->with('message','Company Details Added');
    }

    public function edit($id){
        $com = Company_Detail::find($id);
        
        return view('AdminPanel.company.edit_company',[
            'com'=>$com
        ]);
    }
    public function update(Request $request){
        $com= Company_Detail::find($request->id);
        $com->name = $request->name;
        $com->description = $request->description;
        $com->save();

        return redirect('admin/company')->with('message','Updated Data');
    }
}
