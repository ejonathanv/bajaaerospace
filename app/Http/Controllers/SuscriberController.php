<?php

namespace App\Http\Controllers;

use App\Models\Suscriber;
use App\Mail\NewSubscriber;
use Illuminate\Support\Str;
use App\Exports\SubscribersExport;
use App\Mail\ThankYouForSubscribing;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\StoreSuscriberRequest;
use App\Http\Requests\UpdateSuscriberRequest;

class SuscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subscribers = Suscriber::latest()->paginate(9);
        return view('admin.subscribers.index', compact('subscribers'));
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
    public function store(StoreSuscriberRequest $request)
    {

        $suscriber = Suscriber::create($request->validated());

        Mail::to($suscriber->email)->send(new ThankYouForSubscribing($suscriber));
        
        Mail::to(env('MAIL_TO_ADDRESS'))->send(new NewSubscriber($suscriber));

        return redirect()->back()->with('successNewsletter', 'Thank you for suscribe');

    }

    /**
     * Display the specified resource.
     */
    public function show(Suscriber $suscriber)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Suscriber $suscriber)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSuscriberRequest $request, Suscriber $suscriber)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Suscriber $subscriber)
    {
        $subscriber->delete();
        return redirect()->back()->with('success', 'Suscriber deleted');
    }

    public function download(){
        $fileName = Str::slug('Baja Aerospace Cluster Subscribers List', '-').'.xlsx';
        return Excel::download(new SubscribersExport(), $fileName); 
    }
}
