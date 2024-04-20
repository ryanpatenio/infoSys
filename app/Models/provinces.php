<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class provinces extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function cities()
    {
        return $this->hasMany(Cities::class);
    }

    public function regions()
    {
        return $this->belongsTo(Regions::class);
    }
}
