<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reminder extends Model
{
    use HasFactory;
    protected $fillable = [

        'title', 
        'description', 
        'due_date', 
        'priority', 
        'status',
        'created_at',
        'updated_at'
    ];
    
    protected $table = 'reminder';
    
    }
