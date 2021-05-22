<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\Transection;
use App\Models\Package;
use App\Models\Userpackage;
use Illuminate\Http\Request;

class UserpackageController extends Controller
{
   public function  viewPackage(){

$userpurchase=Userpackage::where('userId',auth('user')->user()->id)->get();
$packages=Package::all();
       return view('frontend.layouts.package.userpackage',compact('packages','userpurchase'));
   }


    public function purchasePackage($id)
    {
//        dd($id);
        $data= Package::where('id',$id)->first();
        return view('frontend.layouts.package.purchase',compact('data'));
    }


    public function purchasePackageDone(Request $request)
    {


        Userpackage::create([
            'userId'=>auth('user')->user()->id,
            'package_id'=>$request->packageId,
            'package_price'=>$request->packagePrice,
            'numberOfPosts'=>$request->numberofposts,
            'transactionId'=>$request->transactionId,
            'amountToPay'=>$request->pricePaid,
            'packageName'=>$request->packageName,


        ]);

        return redirect()->route('package');

    }
}
