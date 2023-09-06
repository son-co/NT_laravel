<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Reviews extends Model
{
    use HasFactory;

    protected $table = 'reviews';

    public function products()
    {
        return $this->belongsTo(Products::class,'productID'); // Thay Product::class bằng tên model thật của sản phẩm
    }

    public function getReview($pid)
    {
        $review = DB::select('SELECT u.fullname,r.date,r.image,r.content FROM reviews as r JOIN users as u ON r.userID = u.id WHERE r.productID= ? ',[$pid]);
        return $review;
    }

    public function addReview($data){
        $review = DB::insert('INSERT INTO reviews (userID, productID, content, image, date) VALUES (?, ?, ?, ?, ?)', $data);
        return $review;
    }
}
