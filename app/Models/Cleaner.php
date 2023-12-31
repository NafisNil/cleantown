<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cleaner extends Model
{
    use HasFactory;
    protected $fillable = ['name_en', 'name_bn','father_name','husband_name','address','ward_no','holding_no','phone','nid','status'];
}
