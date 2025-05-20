<?php

namespace App\Observers;

use App\Models\InstaUser;

class InstaUserObserver
{
    /**
     * Handle the InstaUser "created" event.
     */
    public function created(InstaUser $instaUser): void
    {
        //
    }

    /**
     * Handle the InstaUser "updated" event.
     */
    public function updated(InstaUser $instaUser): void
    {
        //
    }

    /**
     * Handle the InstaUser "deleted" event.
     */
    public function deleted(InstaUser $instaUser): void
    {
          $instaUser->InstaPost()->delete();
    }

    /**
     * Handle the InstaUser "restored" event.
     */
    public function restored(InstaUser $instaUser): void
    {
        //
    }

    /**
     * Handle the InstaUser "force deleted" event.
     */
    public function forceDeleted(InstaUser $instaUser): void
    {
        //
    }
}
