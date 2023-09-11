<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserDetail;

use App\Models\Orders;
use App\Models\OrdersDetail;
use App\Models\Products;

class UserDetailController extends Controller
{
    //

    private $product;
    private $order;
    private $orderDetail;

    public function __construct()
    {
        $this->product = new Products();
        $this->order = new Orders();
        $this->orderDetail = new OrdersDetail();
    }
    public function getAccount(){

        $order = Orders::with('ordersDetail.product')
                        ->where('id', )
                        ->first();
        
        return view('clients.account.userdetail');
    }
}
