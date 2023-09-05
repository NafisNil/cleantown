<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Landlord extends Model
{
    use HasFactory;
    protected $fillable = ['name_en', 'name_bn','father_name','husband_name', 'dob','address','flat_no','ownership','email','phone','nid','birth_cer','holding_type','status','code','ward_no','holding_no'];
}
