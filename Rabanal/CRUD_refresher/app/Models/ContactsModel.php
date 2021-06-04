<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactsModel extends Model
{
    use HasFactory;

    protected $table = "contacts";

    protected $fillable = [
        'first_name',
        'last_name',
        'middle_name',
        'age',
        'birthday',
        'rating',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

}
