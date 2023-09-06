<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class CartController extends Controller
{
    //
    private $cart;
    public function __construct()
    {
        $this->cart = new Cart();
    }

    public function getCart(){
        $user = Auth::user();
        $userID = $user->id;
        // $this->cart->getCart($userID,session('productID'));
        $data = $this->cart->getCart($userID);
        $total =$this->calculateTotal();

        return view('clients.cart.cart', compact('data','total'));
    }
    public function addCart(Request $request){
        $user = Auth::user();
        $userID = $user->id;
// ----------------
        $productId = session('productID');

        $existingCartItem = Cart::where('userID', $userID)
                                ->where('productID', $productId)
                                ->first();

        if ($existingCartItem) {
            // Nếu sản phẩm đã tồn tại trong giỏ hàng, cộng thêm số lượng
            $existingCartItem->quantity +=  (int)$request->quantity;
            $existingCartItem->save();

        } else {
            // Nếu sản phẩm chưa tồn tại trong giỏ hàng, thêm mới
            $data =[
                session('productID'),
                $request->quantity,
                $userID
            ];

            $this->cart->addCart($data);
        }
        // Cart::create([
        //     'userID' => $userID,
        //     'product_id' => $productId,
        //     'quantity' => $request->quantity,
        // ]);
        
        return redirect()->back();
    }

    public function addCartHome(Request $request,$id){
        $user = Auth::user();
        $userID = $user->id;
        $existingCartItem = Cart::where('userID', $userID)
                                ->where('productID', $id)
                                ->first();

        if ($existingCartItem) {
            // Nếu sản phẩm đã tồn tại trong giỏ hàng, cộng thêm số lượng
            $existingCartItem->quantity +=  (int)$request->quantity;
            $existingCartItem->save();

        } else {
            // Nếu sản phẩm chưa tồn tại trong giỏ hàng, thêm mới
            $data =[
                $id,
                1,
                $userID
            ];

            $this->cart->addCart($data);
        }
        return redirect()->back();
    }

    public function deleteCart($id = 0)
    {
        $this->cart->deleteCart($id);

        return back();
    }

    public function calculateTotal()
    {
        $userId = Auth::user()->id; // Lấy ID của người dùng đang đăng nhập
        $cartItems = Cart::where('userID', $userId)->with('products')->get(); // Lấy các sản phẩm trong giỏ hàng của người dùng
        $totalAmount = 0;

        foreach ($cartItems as $item) {
            $totalAmount += $item->products->price * $item->quantity;
        }

        return $totalAmount;
    }

    public function calculateQuantity()
    {
        if(Auth::check()){
            $userId = Auth::user()->id;

            $cartItems = Cart::where('userID', $userId)
                            ->get();
    
            $totalQuantity = $cartItems->groupBy('productID')
                                        ->sum(function ($item) {
                                            return $item->sum('quantity');
                                        });
    
            return $totalQuantity;
        }else{
            return 0;
        }
        
    }
    
}
