<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;
use App\Models\OrdersDetail;
use App\Models\Cart;
use App\Http\Controllers\CartController;



class OrdersController extends Controller
{
    //
    public function saveOrder(Request $request,CartController $cart)
    {
        // Lấy thông tin giỏ hàng của người dùng
        $userId = auth()->user()->id;
        $cartItems = Cart::where('userID', $userId)->get();
        $total =$cart->calculateTotal();
        
                
        // Tạo một đơn hàng mới
        $order = new Orders();
        $order->userID = $userId;
        $order->note = $request->note;
        $order->shippingaddress = $request->shippingaddress;
        $order->numberphone = $request->numberphone;
        $order->totalPrice	= $total;

        // Lưu đơn hàng
        $order->save();

        //Tạo và lưu chi tiết đơn hàng cho từng sản phẩm trong giỏ hàng
        foreach ($cartItems as $item) {
            $orderDetail = new OrdersDetail();
            $orderDetail->orderID = $order->id;
            $orderDetail->productID = $item->productID;
            $orderDetail->quantity = $item->quantity;
           
            // Lưu chi tiết đơn hàng
            $orderDetail->save();
        }

        // Xóa giỏ hàng sau khi đã đặt hàng
        Cart::where('userID', $userId)->delete();

        // Redirect hoặc thực hiện các tác vụ khác sau khi đã đặt hàng

        return redirect()->route('home');
    }
}
