<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showLoginRegistration()
    {
        return view('frontend.layouts.login-registration');
    }
    public function registration(Request $request)
    {

        $request->validate([
            'name'=>'required',
            'email'=>'email|required|unique:users',
            'password'=>'required|min:6',
            'role'=>'required',
            'nid'=>'required|min:10|max:10',
            'address'=>'required',
            'contact'=>'required|min:11|max:11',
            'imageNidkoi'=>'required'

        ]);

        $imageNid = "";

        if ($request->hasFile('imageNidkoi')) {
            $files = $request->file('imageNidkoi');

            //foreach ($files as $key=> $file){

                if ($files->isValid()) {

                    $file_name_nid= date('Ymdhms'). '.' . $files->getClientOriginalExtension();

                    $files->storeAs('nids', $file_name_nid);
                    $imageNid=  $file_name_nid;


                }
            }


        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'role'=>$request->role,
            'status'=>$request->status,
            'nid'=>$request->nid,
            'imageNid' => $imageNid,
            'address'=>$request->address,
            'contact'=>$request->contact
        ]);

        return redirect()->back()->with('success','User Registration Successful.');

    }

    public function login(Request $request)
    {
//        dd($request->all());
//validate input
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:6',

        ]);

        //authenticate
        //dd($credentials = $request->only('email', 'password'));
        $credentials = $request->only('email', 'password');
        if (Auth::guard('user')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('homepage');
        }
        return back()->withErrors([
            'email' => 'Invalid Credentials.',
        ]);

    }

    public function logout()
    {
        Auth::guard('user')->logout();

        return redirect()->route('login.registration.form')->with('success','Logout Successful.');

    }

    public function userprofile()
    {

        return view('frontend.layouts.userprofile.userdashboard');
    }




    public function profile()
    {

        $data=User::where('id',auth('user')->user()->id)->get();
        //dd($user);
        return view('frontend.layouts.userprofile.profile',compact('data'));
    }















}
