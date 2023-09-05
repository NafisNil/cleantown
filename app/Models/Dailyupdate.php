<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dailyupdate extends Model
{
    use HasFactory;
    protected $fillable = ['volunteer_id','status','holding_no','logo'];
}
