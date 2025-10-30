<?php

namespace App\Models;
use App\Models\Places;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = ['name', 'description', 'image', 'continent_id'];

    public function places()
    {
        return $this->hasMany(places::class);
    }
}
