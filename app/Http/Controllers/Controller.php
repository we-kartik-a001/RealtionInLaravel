<?php

namespace App\Http\Controllers;

use App\Traits\LogActivity;

abstract class Controller
{
     use LogActivity;

   public function show($id)
    {
        $this->logActivity("Viewed user with ID: $id");
      
    }
}
