<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reminder extends Model
{
    use HasFactory;
    protected $fillable = [

        'title', 'description', 'due_date', 'priotity', 'status'
    ];
    
    protected $table = 'reminder';
    
    }
