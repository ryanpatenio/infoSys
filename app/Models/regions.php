<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\Relations\HasMany;


class regions extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'    
    ];

    // public function Provinces() : HasMany
    // {
    //     return $this->hasMany(Provinces::class);
    // }


}
