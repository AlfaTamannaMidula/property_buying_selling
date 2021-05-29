<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function paymentreport()
    {
        $allpayment=[];
        $fromDate=null;
        $toDate=null;
        $title="Report Generate";

        if(isset($_GET['from_date']) && isset($_GET['to_date']) )
        {
            $fromDate=date('Y-m-d',strtotime($_GET['from_date']));
            $toDate=date('Y-m-d',strtotime($_GET['to_date']));


            $allpayment=Payment::whereBetween('created_at',[$fromDate,$toDate])->get();
        }

        return view('backend.layouts.report.report',compact('allpayment','fromDate','toDate','title'));
    }
}
