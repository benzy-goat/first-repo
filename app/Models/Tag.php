<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $guarded = [];
    /// polymorphic many to many
    public function parks (){
        return $this->morphedByMany(Park::class,'taggable');
    }

    public function hotels (){
        return $this->morphedByMany(Hotel::class,'taggable');
    }

    public function zoos (){
        return $this->morphedByMany(Zoo::class,'taggable');
    }
}
