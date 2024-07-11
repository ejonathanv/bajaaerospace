<?php

namespace App\Providers;

use App\Providers\StoreTalent;
use Illuminate\Support\Facades\Mail;
use App\Mail\ThankYouForApplyingMail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SayThanksToTalent
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(StoreTalent $event): void
    {
        $request = $event->request;
        $talentEmail = $request->email;

        Mail::to($talentEmail)->send(new ThankYouForApplyingMail($request));
    }
}
