<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\View;




class ProductsController extends Controller
{
    //
    private $product;
    private $cart;

    public function __construct()
    {
        $this->product = new Products();
        $this->cart = new Cart();
    }

    public function index(Request $request,CartController $CartController){
        

        if (Auth::check()) {
            $user = Auth::user();
            $userID = $user->id;
            $headerData = $this->cart->getCart($userID);
            $totalCart = $CartController->calculateQuantity();

            // View::share('headerData', $headerData);
            // View::share('totalCart', $totalCart);

            $product = $this->product->getAllProduct();

            return view('home', ['product' => $product]);
        } else {
            $product = $this->product->getAllProduct();
            return view('home', ['product' => $product]);
        }

       
    }

    public function productDetail(Request $request,$id){
       
        $product = $this->product->getProduct($id);
        $request->session()->put('productID', $id);

        // dd($product[0]->name);
        return view('clients.product-detail.product-detail', compact('product'));
    }

}
