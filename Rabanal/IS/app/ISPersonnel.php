<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ISPersonnel extends Model
{
    use HasFactory; 
    protected $table="is_personnel";
    protected $fillable=[
        "firstname",
        "lastname",
        "age",
        "gender",
        "Birthday"];
}
