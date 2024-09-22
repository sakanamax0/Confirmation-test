<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
    'last_name',
    'first_name',
    'gender',
    'email',
    'phone',
    'address',
    'building',
    'inquiry_type',   // 修正
    'inquiry_content', // 修正
];

}
