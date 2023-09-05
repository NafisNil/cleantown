<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    use HasFactory;
    protected $fillable = ['name_en', 'name_bn','father_name','holding_no','flat_no','dob','nid','birth_cer','ward_no','mobile_no','email','address','education','volunteer_id'];
}
