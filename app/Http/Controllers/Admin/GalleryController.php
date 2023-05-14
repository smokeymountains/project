<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Apeal;
use App\Models\Blog;
use App\Models\Causes;
use App\Models\Event;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $causes=Causes::all();
        $blog=Blog::all();
        $event=Event::all();
        $apeal=Apeal::all();       
        return view('admin.gallery.index',compact('causes','blog','event','apeal'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
