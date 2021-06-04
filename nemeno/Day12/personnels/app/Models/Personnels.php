<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personnels extends Model
{
    use HasFactory;

    protected $table = 'Personnels';

    protected $fillable = [

        "first_name",
        "last_name",
        "middle_name",
        "age",
        "birthday",
        "rating"
    ];

}
