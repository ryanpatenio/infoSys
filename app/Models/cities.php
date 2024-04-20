<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class cities extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'zipcode'
    ];

    public function provinces()
    {
        return $this->belongsTo(Provinces::class);
    }
}
