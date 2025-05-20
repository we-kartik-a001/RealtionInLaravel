<?php

namespace App\Http\Controllers;

use App\Models\InstaPost;
use Illuminate\Http\Request;

class InstaPostController extends Controller
{
    public function index()
    {
        $instuser = InstaPost::with('InstaUser')->find(1);
        
    }
}
