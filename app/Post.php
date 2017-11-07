<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $dates = ['published_at'];

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;

        if (! $this->exists)
        {
            $this->attributes['slug'] = str_slug($value);
        }
    }
}

// Here the published_at column should be treated as a date.
// Whenever a value is assigned to the title property of this object,
// the setTitleAttribute() method will be called to do it, 
// if the row has not yet been saved to the database
// then it converts the title to a slug value and assign the slug.
