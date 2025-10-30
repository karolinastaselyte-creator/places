<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    protected $fillable = ['name', 'description', 'image'];

    public function countries()
    {
        return $this->hasMany(Country::class);
    }
}

