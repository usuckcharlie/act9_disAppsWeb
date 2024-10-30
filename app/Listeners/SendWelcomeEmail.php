<?php

namespace App\Listeners;

use App\Notifications\WelcomeEmail;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendWelcomeEmail
{
    public function __construct()
    {
        //
    }

    public function handle(Registered $event)
    {
        $event->user->notify(new WelcomeEmail());
    }
}
