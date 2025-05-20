<?php

namespace App\Traits;

use Illuminate\Support\Facades\Log;

trait LogActivity
{
     public function logActivity($message)
    {
        Log::info("[Activity] " . $message);
    }
}
