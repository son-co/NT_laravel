<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Reviews;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\View;
use Carbon\Carbon;

class ProductsController extends Controller
{
    //
    private $product;
    private $cart;
    private $review;

    public function __construct()
    {
        $this->product = new Products();
        $this->cart = new Cart();
        $this->review = new Reviews();
    }

    public function index(){
    
        $product = $this->product->getAllProduct();
        return view('home', ['product' => $product]);
       
    }

    public function headerCartComposer(){
        if (Auth::check()){
            $user = Auth::user();
            $userID = $user->id;
            $headerData = $this->cart->getCart($userID);
            return $headerData;
        }else{
            return [];
        }
        
    }


    public function productDetail(Request $request,$id){
        $review = $this->review->getReview($id);
        $product = $this->product->getProduct($id);
        $request->session()->put('productID', $id);

        return view('clients.product-detail.product-detail', compact('product','review'));
    }

    public function addReview(Request $request){
        $user = Auth::user();
        $userID = $user->id;

        $currentDate = Carbon::now();
        $date =  $currentDate->format('d/m/Y');

        $productId = session('productID');

        if ($request->hasFile('image_review')) {
            $image = $request->file('image_review');
    
            // Tạo tên tệp duy nhất cho hình ảnh
            $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
    
            $image->move('images/review', $imageName);
        }

        $data = [
            $userID,
            $productId,
            $request->content_review,
            $imageName,
            $date,
        ];

        $this->review->addReview($data);
        return back();
    }

}
