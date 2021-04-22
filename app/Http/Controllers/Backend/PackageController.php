<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Models\Package;

class PackageController extends Controller
{
    public function viewpackage()
    {

//     calling all data from package table=   Package::all();
        $packages = Package::all();
        $title = "Package List";
        return view('backend.layouts.packages.pview', compact('packages', 'title'));
    }

    public function packageadd(Request $request)
    {

        Package::create([
            'name' => $request->package_name,
            'price' => $request->price,
            'description' => $request->description,
            'status' => $request->status
        ]);
        return redirect()->back();
    }

    public function deletepackage($id)
    {
//        first get the product
        $package=package::find($id);
        //then delete it
        $package->delete();


        return redirect()->back()->with('success','Package Deleted Successfully.');
    }



}

