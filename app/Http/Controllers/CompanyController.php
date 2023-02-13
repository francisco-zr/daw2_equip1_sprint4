<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index(){
        return view('llistatEmpreses.show');
    }

    public function listCompanies(){
        $companies = Company::all(['name','email','phone','cif']);

        return $companies;
    }

    public function storeCompany(Request $request){
        $company = new Company();
        $company->name = $request->name;
        $company->email = $request->email;
        $company->phone = $request->phone;
        $company->cif =   $request->cif;
        $company->save();
    }
}
