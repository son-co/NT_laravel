<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdersDetail extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'ordersdetail';
    public function orders()
    {
        return $this->belongsTo(Orders::class,'orderID');
    }

    public function product()
    {
        return $this->belongsTo(Products::class,'productID');
    }
}
