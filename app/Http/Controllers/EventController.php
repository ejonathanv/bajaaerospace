<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Support\Str;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use Carbon\Carbon;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $events = Event::latest()->paginate(5);
        return view('admin.events.index', compact('events'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEventRequest $request)
    {
        $event = new Event();
        $event->title = $request->title;
        $event->description = $request->description;
        $event->start_date = Carbon::parse($request->start_date)->format('Y-m-d');
        $event->end_date = Carbon::parse($request->end_date)->format('Y-m-d');
        $event->start_time = Carbon::parse($request->start_time)->format('H:i');
        $event->end_time = Carbon::parse($request->end_time)->format('H:i');
        $event->location = $request->location;
        $event->address = $request->address;
        $event->slug = Str::slug($request->title);
        $event->published = $request->published ? true : false;
        
        $event->save();

        if ($request->hasFile('flyer')) {
            $this->uploadFlyer($request, $event);
        }

        return redirect()->route('events.show', $event)->with('success', 'Event created successfully!');

    }

    public function uploadFlyer($request, $event){
        $file = $request->file('flyer');
        $fileName = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();
        $file->move('events', $fileName);
        $event->flyer = $fileName;
        $event->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        return view('admin.events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEventRequest $request, Event $event)
    {
        $event->title = $request->title;
        $event->description = $request->description;
        $event->start_date = Carbon::parse($request->start_date)->format('Y-m-d');
        $event->end_date = Carbon::parse($request->end_date)->format('Y-m-d');
        $event->start_time = Carbon::parse($request->start_time)->format('H:i');
        $event->end_time = Carbon::parse($request->end_time)->format('H:i');
        $event->location = $request->location;
        $event->address = $request->address;
        $event->slug = Str::slug($request->title);
        $event->published = $request->published ? true : false;

        $event->save();

        if ($request->hasFile('flyer')) {
            $this->uploadFlyer($request, $event);
        }

        return redirect()->route('events.show', $event)->with('success', 'Event updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('events.index')->with('success', 'Event deleted successfully!');
    }
}
