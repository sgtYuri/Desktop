<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
        
    //table name
    protected $table = "messages";
    //fields
     protected $fillable = [

    'user_id',
    'message',
    'created_at',
    'updated_at'
   
  
     ];        

}

