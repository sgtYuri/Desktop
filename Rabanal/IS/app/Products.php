<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory; 
    protected $table="products";
    protected $fillable=[
        "name",
        "category",
        "price",
        "size",
        "color",
        "stocks",
        "photo"
    ];
}
