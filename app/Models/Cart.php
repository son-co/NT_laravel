<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class Cart extends Model
{
    use HasFactory;

    protected $table = 'cart';
    public $timestamps = false;

    public function products()
    {
        return $this->belongsTo(Products::class,'productID'); // Thay Product::class bằng tên model thật của sản phẩm
    }

    public function getCart($userID){
        $cart = DB::select('SELECT *,c.id AS cartID,p.id AS productID,p.price*c.quantity as money FROM cart AS c JOIN users AS u ON c.userID=u.id JOIN products as p ON c.productID=p.id WHERE c.userid =?', [$userID]);
        return $cart;
    }

    public function addCart($data){
        $cart = DB::insert('INSERT INTO cart (productID, quantity, userID) VALUES (?, ?, ?)', $data);
        return $cart;
    }

    public function deleteCart($id){
        return DB::delete('DELETE FROM cart WHERE id = ?', [$id]);
    }

    // public function getQuantity($userID,$productID){
    //     return DB::select('SELECT quantity FROM cart AS c WHERE c.userid =? AND c.productID=?', [$userID,$productID]);

    // }

    // public function increaseCart($quantity,$id){
    //     return DB::update('UPDATE cart SET quantity=? WHERE id = ?', [$quantity,$id]);
    // }

    // public function decreaseCart($quantity,$id){
    //     return DB::update('UPDATE cart SET quantity=? WHERE id = ?', [$quantity,$id]);
    // }

    
}
