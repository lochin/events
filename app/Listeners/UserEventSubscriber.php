<?php

namespace App\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Auth\Events\Login;
use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Log;

class UserEventSubscriber
{
    /**
     * Handle user login events.
     */
    public function handleUserLogin($event) {
        Log::info("User login!");
    }

    /**
     * Handle user logout events.
     */
    public function handleUserLogout($event) {
        Log::warning("User logout!");
    }

    /**
     * Register the listeners for the subscriber.
     *
     * @param  \Illuminate\Events\Dispatcher  $events
     */
    public function subscribe($events)
    {
        $events->listen(
            Login::class,
            'App\Listeners\UserEventSubscriber@handleUserLogin'
        );

        $events->listen(
            Logout::class,
            'App\Listeners\UserEventSubscriber@handleUserLogout'
        );
    }
}
