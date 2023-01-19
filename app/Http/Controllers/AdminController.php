<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Index(){
        return view('admin.admin_login');
    }

    public function Dashboard(){
        return view('admin.index');
    }

    public function Login(Request $request){
        // dd($request->all());

        $check = $request->all();
        if(Auth::guard('admin')->attempt(['email' => $check['email'], 'password' => $check['password'] ])){
            return redirect()->route('admin.dashboard')->with('error' , 'Admin login succefuly');
        }else{
            return back()->with('error' , 'Invalid Email or Password');
        }

    }  // end methode

    public function AdminLogout(){

        Auth::guard('admin')->logout();
        return redirect()->route('login_form')->with('error' , 'Admin LoggedOut successfully');

    } // end method

    public function AdminRegister(){

        return view('admin.admin_register');

    } // end method

    public function AdminRegisterCreate(Request $request){

        // dd($request->all()); 
        Admin::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => hash::make($request->password),
            'created_at' => Carbon::now()
        ]);

        return redirect()->route('login_form')->with('error' , 'Admin Created succefuly');
    } // END METHOD

}
