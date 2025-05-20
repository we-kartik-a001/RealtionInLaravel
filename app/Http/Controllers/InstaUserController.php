<?php

namespace App\Http\Controllers;

use App\Models\InstaUser;
use App\Models\User;
use Illuminate\Http\Request;

class InstaUserController extends Controller
{
    public function index()
    {
        $instapost = InstaUser::with('InstaPost')->find(1);

        return $instapost;
    }
}
