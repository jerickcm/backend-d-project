<?php

namespace App\Listeners;

use App\Events\AdminLogEvent;
use App\Models\AdminLog;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class AdminLogEventListener
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
     * @param  AdminLogEvent  $event
     * @return void
     */
    public function handle(AdminLogEvent $event)
    {
        AdminLog::create([
            'user_id' => $event->user_id,
            'type' => $event->type,
            'meta' => $event->meta,
        ]);
    }
}
