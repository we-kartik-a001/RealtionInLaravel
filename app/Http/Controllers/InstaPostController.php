<?php

namespace App\Http\Controllers;

use App\Models\InstaPost;

class InstaPostController extends Controller
{
    public function index()
    {
        $instuser = InstaPost::with('InstaUser')->find(1);
    }

    public function create()
    {
        $post_title ="This is just testing";
         
        InstaPost::create([
            'title' => $post_title,
            'description'=>"lorem",
            'detail' =>"let see",
            'Insta_user_id' =>1 
        ]);
    }
}
