<?php

namespace App\Observers;

use App\Models\Instapost;
use Illuminate\Support\Str;

class InstaPostObserver
{
    /**
     * Handle the Instapost "created" event.
     */
    public function created(Instapost $instapost): void
    {
        //
    }

    public function saving(Instapost $instapost): void{
        $instapost->slug = Str::slug($instapost->title, "-");
    }

    /**
     * Handle the Instapost "updated" event.
     */
    public function updated(Instapost $instapost): void
    {
        //
    }

    /**
     * Handle the Instapost "deleted" event.
     */
    public function deleted(Instapost $instapost): void
    {
        //
    }

    /**
     * Handle the Instapost "restored" event.
     */
    public function restored(Instapost $instapost): void
    {
        //
    }

    /**
     * Handle the Instapost "force deleted" event.
     */
    public function forceDeleted(Instapost $instapost): void
    {
        //
    }
}
