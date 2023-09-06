<?php

// app/Http/View/Composers/HeaderComposer.php
namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CartController;

class HeaderComposer
{
    private $headerData;
    private $totalCart;

    public function __construct (ProductsController $headerDataa, CartController $total){
        $this->headerData = $headerDataa->headerCartComposer();
        $this->totalCart = $total->calculateQuantity();
        
    }

    public function compose(View $view )
    {
        // Đưa dữ liệu bạn muốn đổ vào header
        $view->with('headerData',$this->headerData);
        $view->with('totalCart', $this->totalCart);
    }


}
