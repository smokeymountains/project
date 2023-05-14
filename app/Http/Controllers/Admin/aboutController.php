<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;

class aboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about =AboutUs ::all();
       return view('admin.about.index',compact('about'));
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
    public function edit($id)
    {
        $about = AboutUs::findOrFail($id);
        return view('admin.about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $about = AboutUs::findOrFail($id);

        if ($about) {
            $about->update([
                'descr1' => $request->input('descr'),
                'descr2' => $request->input('descr2'),
            ]);
            if ($request->hasFile('image1')) {
                $about->clearMediaCollection('about1');
                $about->addMediaFromRequest('image1')->toMediaCollection('about1');
            }
            if ($request->hasFile('image2')) {
                $about->clearMediaCollection('about2');
                $about->addMediaFromRequest('image2')->toMediaCollection('about2');
            }
        }

        return redirect('admin/about');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
