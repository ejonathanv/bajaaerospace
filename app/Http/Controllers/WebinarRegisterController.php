<?php

namespace App\Http\Controllers;

use App\Models\Webinar;
use App\Models\WebinarRegister;
use App\Mail\NewWebinarRegister;
use Illuminate\Support\Facades\Mail;
use App\Mail\ThankYouForRegisteringToWebinar;
use App\Http\Requests\StoreWebinarRegisterRequest;
use App\Http\Requests\UpdateWebinarRegisterRequest;

class WebinarRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreWebinarRegisterRequest $request)
    {

        $webinar = Webinar::latest()->first();

        $register = new WebinarRegister();
        $register->webinar_id = $webinar->id;
        $register->first_name = $request->first_name;
        $register->last_name = $request->last_name;
        $register->email = $request->email;
        $register->phone = $request->phone;
        $register->company = $request->company;
        $register->job_title = $request->job_title;
        $register->save();

        $this->say_thanks_to_user($register, $webinar);
        $this->notify_admin($register);

        return redirect()->route('webinars-success-register')->with('success', 'Thanks for registering to our webinar!');
    }


    public function say_thanks_to_user($register, $webinar){
        Mail::to($register->email)->send(new ThankYouForRegisteringToWebinar($register, $webinar));
    }

    public function notify_admin($register){
        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new NewWebinarRegister($register));
    }

    /**
     * Display the specified resource.
     */
    public function show(WebinarRegister $webinarRegister)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WebinarRegister $webinarRegister)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWebinarRegisterRequest $request, WebinarRegister $webinarRegister)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WebinarRegister $webinarRegister)
    {
        //
    }
}
