<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    use HasFactory;
    protected $table= 'order_details';
    protected $fillable = [
        'product_id',
        'qty',
        'reference_id',
        'total',
        'created_at',
        'updated_at'
    ];
}
