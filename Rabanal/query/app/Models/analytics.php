<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class analytics extends Model
{
    use HasFactory;
    protected $table="analytics";
    protected $fillable=[
        "rank",
        "firstname",
        "middlename",
        "lastname",
        "serialnumber",
        "photo",
    ];
}
