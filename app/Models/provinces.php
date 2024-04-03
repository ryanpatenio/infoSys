<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class provinces extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

     /**
     * Get the user that owns the provinces
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function regions(): BelongsTo
    {
        return $this->belongsTo(Regions::class);
    }
}
