<?php

namespace App\Providers;

use App\Mail\TalentStoredMail;
use App\Providers\StoreTalent;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmailToAdmin
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
        $mailTo = env('MAIL_TO_ADDRESS');

        Mail::to($mailTo)->send(new TalentStoredMail($request));
    }
}
