<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable =[
        'name',
    ];

    public function volunteer()
    {
      return $this->hasMany(Volunteer::class);
    }

    public function posts()
    {
        return $this->hasManyThrough(Post::class, Volunteer::class);
    }
}
