<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    use HasFactory;

    protected $table ='chats'; //table name

    protected $fillable = [
        'user_id',
        'chatmsg'
    ]; 

}
