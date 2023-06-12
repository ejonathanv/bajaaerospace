<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Support\Str;
use App\Http\Requests\StorePageRequest;
use App\Http\Requests\UpdatePageRequest;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pages = Page::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.pages.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePageRequest $request)
    {
        $page = new Page();
        $page->title = $request->title;
        $page->subtitle = $request->subtitle;
        $page->slug = Str::slug($request->title);
        $page->content = $request->content;
        $page->published = $request->has('published') ? true : false;
        $page->add_to_navbar = $request->has('add_to_navbar') ? true : false;
        $page->add_to_footer = $request->has('add_to_footer') ? true : false;
        $page->name_on_navbar = $request->name_on_navbar;

        $page->save();

        if($request->has('cover')){
            $this->uploadCover($request, $page);
        }

        return redirect()->route('pages.show', $page)->with('success', 'Page created successfully!');
    }

    public function uploadCover($request, $page){
        $file = $request->file('cover');
        $fileName = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();
        // We need to move this file to public/posts folder
        $file->move('pages', $fileName);

        $page->cover = $fileName;
        $page->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(Page $page)
    {
        return view('admin.pages.show', compact('page'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Page $page)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePageRequest $request, Page $page)
    {

        $page->title = $request->title;
        $page->subtitle = $request->subtitle;
        $page->slug = Str::slug($request->title);
        $page->content = $request->content;
        $page->published = $request->has('published') ? true : false;
        $page->add_to_navbar = $request->has('add_to_navbar') ? true : false;
        $page->add_to_footer = $request->has('add_to_footer') ? true : false;
        $page->name_on_navbar = $request->name_on_navbar;

        $page->save();

        if($request->has('cover')){
            $this->uploadCover($request, $page);
        }

        return redirect()->route('pages.show', $page)->with('success', 'Page updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Page $page)
    {
        $page->delete();
        return redirect()->route('pages.index')->with('success', 'Page deleted successfully!');
    }
}
