<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use View;

use App\Models\Entreprise;

class CreateCompany extends Controller
{
    function index() {
        return view('create_company');
    }

    function create(Request $req){
        $req->validate([
            'nom'=>'required',
            'rue'=>'required',
            'codePostal'=>'required|max:5',
            'ville'=>'required',
            'numeroTelephone'=>'required|max:10',
            'email'=>'required|email'
        ]);
        
        $company = new Entreprise();
        $company->nom = $req->nom;
        $company->rue = $req->rue;
        $company->code_postal = $req->codePostal;
        $company->ville = $req->ville;
        $company->numero_telephone = $req->numeroTelephone;
        $company->email = $req->email;
        $query = $company->save();

        if($query) {
            return back()->with('Registered Successfully');
        } else {
            return back()->with('Failed to register');
        }
    }

    function company_details($id){
        //return view('company_details');
        $company_info = Entreprise::where('id','=',$id)->first();
        return View::make('company_details')->with(compact('company_info'));
    }

    function update ($id) {
        $company_info = Entreprise::find('id','=',$id)->first();
        return View::make('update_company')->with(compact('company_info'));
    }
}
