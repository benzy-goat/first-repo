<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Zoo extends Model
{
    protected $guarded = [];
    /// polymorphic many to many
    public function tags(){
        return $this->morphToMany(Tag::class,'taggable');
    }
}
