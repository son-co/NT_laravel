<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;


class Products extends Model
{
    use HasFactory;

    protected $table = 'products';

    public function cart()
    {
        return $this->hasMany(Cart::class, 'productID'); // Thay Cart::class bằng tên model thật của giỏ hàng
    }

    public function OrdersDetail()
    {
        return $this->hasMany(OrdersDetail::class, 'productID'); // Thay Cart::class bằng tên model thật của giỏ hàng
    }

    public function reviews()
    {
        return $this->hasMany(Reviews::class, 'productID'); // Thay Cart::class bằng tên model thật của giỏ hàng
    }
    public function getAllProduct()
    {
        $products = DB::select('SELECT * FROM products ORDER BY ID ASC ');
        return $products;
    }

    public function getProduct($id)
    {
        $product = DB::select('SELECT * FROM products WHERE id = ?', [$id]);
        return $product;
    }

    
}

