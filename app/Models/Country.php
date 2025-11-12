<?php

namespace App\Models;
use App\Models\Place;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = ['name', 'description', 'big_description', 'image', 'continent_id'];

    public function place()
    {
        return $this->hasMany(place::class);
    }
}