<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
    use HasFactory;

    protected $table = "statistics";

    protected $fillable = [
        'personnel_id',
        'height',
        'weight',
        'bmi',
        'created_at',
        'updated_at'
    ];
}
