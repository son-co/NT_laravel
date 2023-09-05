<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    //
    private $cart;
    public function __construct()
    {
        $this->cart = new Cart();
    }
    public function index(CartController $CartController)
    {
        $user = Auth::user();
        $userID = $user->id;
        $data = $this->cart->getCart($userID);
        $totalCart = $CartController->calculateQuantity();

        View::share('headerData', $data);
        View::share('totalCart', $totalCart);

        return view('home');
    }

    
}