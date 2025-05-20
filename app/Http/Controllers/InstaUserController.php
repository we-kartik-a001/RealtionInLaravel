<?php

namespace App\Http\Controllers;

use App\Models\InstaUser;
use App\Models\User;
use Illuminate\Http\Request;

class InstaUserController extends Controller
{
    public function index()
    {
        $instapost = InstaUser::with('InstaPost')->find(2);

        return $instapost;
    }

    // This will delete the user and post together
    public function create()
    {
        $user = InstaUser::find(3)->delete();
    }
}
