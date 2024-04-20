<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserDetails extends Model
{
    use HasFactory;

  
    
    protected $fillable = [
        
        'user_id',
        'gender',
        'occupation',
        'bday',
        'contact',
        'bloodtype',
        'country',
        'status',
        'age',
        'address',
        'region_id',
        'province_id',
        'city_id'     
        
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
