<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $fillable = ['name', 'description', 'big_description', 'corednets', 'rating', 'country_id', 'categories_id'];

    public function categories(){
        return $this->belongsTo(Categories::class);
    }

    public function images()
    {
        return $this->hasMany(images::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function firstImages()
    {
        return $this->images()->first()?->link ??'https://media.istockphoto.com/id/1396814518/vector/image-coming-soon-no-photo-no-thumbnail-image-available-vector-illustration.jpg?s=612x612&w=0&k=20&c=hnh2OZgQGhf0b46-J2z7aHbIWwq8HNlSDaNp2wn_iko=';
    }
}
