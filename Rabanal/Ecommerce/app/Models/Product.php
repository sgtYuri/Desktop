<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table= 'products';
    protected $fillable = [
        'name',
        'category',
        'price',
        'image1',
        'image2',
        'image3',
        'details',
        'created_at',
        'updated_at'
    ];

}
