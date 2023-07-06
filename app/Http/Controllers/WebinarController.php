<?php

namespace App\Http\Controllers;

use App\Models\Webinar;
use Illuminate\Support\Str;
use App\Http\Requests\StoreWebinarRequest;
use App\Http\Requests\UpdateWebinarRequest;

class WebinarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $webinars = Webinar::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.webinars.index', compact('webinars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $webinar = new Webinar();
        $webinar->flyer = 'default.jpg';
        return view('admin.webinars.create', compact('webinar'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreWebinarRequest $request)
    {

        $webinar = new Webinar();
        $webinar->title = $request->title;
        $webinar->description = $request->description;
        $webinar->link = $request->link;
        $webinar->video = $request->video;
        $webinar->slug = Str::slug($request->title, '-');
        $webinar->published = $request->published ? true : false;
        $webinar->save();

        $this->uploadImage($request, $webinar);

        return redirect()->route('webinars.index')->with('success', 'Webinar created successfully.');

    }

    /**
     * Upload the image for the webinar.
     */
    private function uploadImage($request, $webinar){
        if ($request->has('flyer')) {
            $file = $request->file('flyer');
            $fileName = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();
            $file->move('webinars', $fileName);
            $webinar->flyer = $fileName;
            $webinar->save();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Webinar $webinar)
    {
        return view('admin.webinars.show', compact('webinar'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Webinar $webinar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWebinarRequest $request, Webinar $webinar)
    {
        $webinar->title = $request->title;
        $webinar->description = $request->description;
        $webinar->link = $request->link;
        $webinar->video = $request->video;
        $webinar->slug = Str::slug($request->title, '-');
        $webinar->published = $request->published ? true : false;
        $webinar->save();

        $this->uploadImage($request, $webinar);

        return redirect()->route('webinars.show', $webinar)->with('success', 'Webinar updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Webinar $webinar)
    {
        //
    }
}
