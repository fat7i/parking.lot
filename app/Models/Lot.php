<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Lot extends Model
{

    protected $fillable = ['name', 'size'];

    function parked()
    {
        return $this->belongsToMany(Parkable::class);
    }
}