<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use View;

use Illuminate\Support\Facades\Hash;

use App\Models\User;

class UserAuthController extends Controller
{
    function login(){
        return view('auth.login');
    }
    function register(){
        return view('auth.register');

    }

    function create(Request $req){
        $req->validate([
            'username'=>'required',
            'password'=>'required',
            'role'=>'required'
        ]);
        $user = new User;
        $user->username = $req->username;
        $user->password = Hash::make($req->password);
        $user->role = $req->role;
        $query = $user->save();

        if($query) {
            return back()->with('Registered Successfully');
        } else {
            return back()->with('Failed to register');
        }
    }
    
    function check(Request $req) {
        $req->validate([
            'username'=>'required',
            'password'=>'required'
        ]);
        $user = User::where('username','=',$req->username)->first();
        if($user){
            if(Hash::check($req->password,$user->password)){
                $req->session()->put('LoggedUser',$user->id);
                return redirect('entreprises');
            }
        }
    }
    function entreprises(){
        if(session()->has('LoggedUser')) {
            $user = User::where('id','=', session('LoggedUser'))->first();
            $data = [
                'LoggedUserInfo'=>$user
            ];
        }
        $companies_table_data = DB::select("select * from entreprise");
        return View::make('shared_access.companies_table')->with(compact('companies_table_data'))->with(compact('data'));
        
        
        //return $data['LoggedUserInfo']['role'];
        //return view('shared_access.companies_table');
    }
}
