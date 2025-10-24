<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Places extends Model
{
    protected $fillable = ['name', 'description', 'big_description', 'corednets', 'rating', 'country_id', 'categories_id'];
}
