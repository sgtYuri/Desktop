<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistics extends Model
{
    use HasFactory;

    protected $table = 'Statistics';

    protected $fillable = [

        "personnel_id",
        "height",
        "weight",
        "age",
        "bmi"
       
    ];

}
