<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function viewpayment()
    {
        return view('backend.layouts.payment');
    }
    public function historypayment(){
        return view('backend.layouts.payment');
    }
}
