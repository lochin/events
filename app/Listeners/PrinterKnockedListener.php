<?php

namespace App\Listeners;

use App\Events\PrinterKnocked;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;

class PrinterKnockedListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  PrinterKnocked  $event
     * @return void
     */
    public function handle(PrinterKnocked $event)
    {
        Log::alert("Printer knocked!!");
    }
}
