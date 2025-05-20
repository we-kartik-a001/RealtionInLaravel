<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InstaUser extends Model
{
    protected $fillable = [
        'name'
    ];

    public function InstaPost()
    {
        return $this->hasMany(InstaPost::class);
    }
     
}
