<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserDetail;
use App\Models\Cart;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\CartController;



class CheckOutController extends Controller
{
    //
    private $userdetail;
    private $cart;

    public function __construct()
    {
        $this->cart = new Cart();
        $this->userdetail = new UserDetail();
    }
    
    public function getCheckout(CartController $cart){
        $user = Auth::user();
        $userID = $user->id;
        $data = $this->cart->getCart($userID);
        $total =$cart->calculateTotal();
        $infoship = $this->userdetail->getUser($userID);

        return view('clients.checkout.checkout',compact('data','total','infoship'));
    }
}
