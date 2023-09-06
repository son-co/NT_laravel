<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckOutController extends Controller
{
    //
    private $checkout;
    // public function __construct()
    // {
    //     $this->checkout = new Cart();
    // }

    public function getCheckout(){
      
        return view('clients.checkout.checkout');
    }
}
