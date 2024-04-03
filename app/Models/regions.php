<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class regions extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'    
    ];

     /**
     * Get all of the comments for the regions
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function cities(): HasManyThrough
    {
        return $this->hasManyThrough(Cities::class, Provinces::class);
    }


}
