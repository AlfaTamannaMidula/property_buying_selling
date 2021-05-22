<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function adminlist()
    {
        $adminlist = Admin::all();
        $title = "Admin List";
        return view('backend.layouts.admin.alist', compact('adminlist', 'title'));
    }

    public function addadminform()
    {

        $title = "view admin";

        return view('backend.layouts.admin.addadmin', compact('title'));
    }

    public function addadmin(Request $request)
    {

        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'contact' => $request->contact,
            'address' => $request->address,
            'status' => $request->status,
            'role' => $request->role,
            'password' => bcrypt($request->password)


        ]);
        return redirect()->route('admin.list');


    }
   public function adminlogin() {
       $title = "Admin Login";
        return view('backend.layouts.adminlogin.login',compact('title'));
    }
    public function adminValidation(Request $request) {

      $request->validate([
          'email'=>'required|email',
          'password'=>'required|min:6'
      ]);

      $credentials = $request->only('email','password');

      if(Auth::guard('admin')->attempt($credentials)) {
          return redirect()->route('dashboard');
      }
          return back()->withErrors([
              'email'=>'Invalid Credentials'
          ]);
      }


public  function adminLogout(){
        Auth::guard('admin')->logout();
        return redirect()->route('adminlogin.view')->with('success','Logout Successfully');
}
}


