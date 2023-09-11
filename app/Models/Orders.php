<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'orders';
    public function ordersDetail()
    {
        return $this->hasMany(OrdersDetail::class);
    }
}
