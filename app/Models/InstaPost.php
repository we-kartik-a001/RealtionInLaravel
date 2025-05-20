<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InstaPost extends Model
{
    protected $fillable=[
        'title',
        'slug',
        'detail',
        'description',
        'Insta_user_id'
    ];

    public function InstaUser(){
        return $this->belongsTo(InstaUser::class);
    }
}
