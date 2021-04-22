<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function viewuser()
    {

        //before paginate
        // $user=User::with('packageName')->get();

        //after paginate
        $user = User::with('packageName')->paginate('6');

        $title = "view user";

        return view('backend.layouts.user.list', compact('user', 'title'));
    }

    public function addform()
    {
        $package = Package::all();

        $title = "view user";

        return view('backend.layouts.user.add', compact('title', 'package'));
    }

    public function adduser(Request $request)
    {

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'contact' => $request->contact,
            'address' => $request->address,
            'status' => $request->status,
            'role' => $request->role,
            'password' => $request->password,
            'packageId' => $request->packageId,


        ]);
        return redirect()->route('user.view');

    }
    public function deleteuser($id)
    {
//        first get the product
        $user=user::find($id);
        //then delete it
        $user->delete();


        return redirect()->back()->with('success','User Deleted Successfully.');



    }
}
