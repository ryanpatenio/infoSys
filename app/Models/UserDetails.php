<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'gender',
        'occupation',
        'bday',
        'contact',
        'bloodtype',
        'country',
        'status',
        'age',
        'address',
        'city',
        'province',
        'zipcode',
        
    ];
}
