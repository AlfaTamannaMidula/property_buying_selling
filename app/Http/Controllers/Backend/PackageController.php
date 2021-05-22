<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Mail\Transection;
use App\Models\Admin;
use App\Models\User;
use App\Models\Userpackage;
use App\Models\Payment;
use Illuminate\Http\Request;
use App\Models\Package;
use Illuminate\Support\Facades\Mail;

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
            'status' => $request->status,
            'numberofPosts' => $request->numberofPosts
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
    public function purchaseRequest()
    {    $title="Purchase Request";
        $purchaseRequest=Userpackage::with('userdata')->where('status','pending')->get();



        return view('backend.layouts.purchase.purchaserequest',compact('purchaseRequest','title'));
    }

    public function approveRequest($id,$username)
    {
        $approve=Userpackage::find($id);
       $user = User::find($approve->userId);

        $approve->update([
            'status'=>'Approved',
            'current_package_status'=>'active'

        ]);
        Mail::to($user->email)->send(new Transection($approve));




        $paymenthistory=Userpackage::find($id);
        Payment::create([

            'userId'=>$paymenthistory->userId,
            'userName'=>$username,
            'packageId'=>$paymenthistory->package_id,
            'packageName'=>$paymenthistory->packageName,
            'approvedBy'=>auth('admin')->user()->name,
            'purchaseId'=>$paymenthistory->id,
            'amount'=>$paymenthistory->amountToPay,
            'paymentDate'=>$paymenthistory->created_at
        ]);

        return redirect()->back()->with('success','Request Approved');

    }
    public function disapproveRequest($id)
    {

        $disapprove= Userpackage::find($id);
        $disapprove->update([
            'status'=>'Disapproved'
        ]);
        return redirect()->back()->with('success','Request has been Disapproved');

    }

    public function disapproveAfterApprove($id)
    {
        $disapprove=Userpackage::find($id);
        $disapprove->update([
            'status'=>'Disapproved',
            'current_package_status'=>'Inactive'
        ]);
        $payment=Payment::where('purchaseId',$id);
        $payment->delete();
        return redirect()->back()->with('success','Request Disapproved Successfully!!!');

    }
   public function disapprove(){

       $title = "Package Disapprove";
       $disapprovedRequests=Userpackage::with('userdata')->where('status','Disapproved')->paginate(10);
        return view('backend.layouts.purchase.disapprove',compact('title','disapprovedRequests'));

   }
    public function purchasehistory(){

        $title = "Package History";
        $approvedRequests=Userpackage::with('userdata')->where('status','Approved')->orWhere('status','expired')->orderBy('updated_at','desc')->paginate(10);

        return view('backend.layouts.purchase.purchasehistory',compact('title','approvedRequests'));

    }


}

