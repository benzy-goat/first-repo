<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    public function Image ()
    {
        return $this->morphMany(Image::class,'imageable');


    }
}
