<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\General;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gen=General::all();
        return view('admin.general.index',compact('gen'));
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
    public function edit($id)
    {
        $gen=General::find($id);
        return view('admin.general.edit',compact('gen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $gen =General::findOrFail($id);

        if ($gen) {
            $gen->update([
                'phone' => $request->input('phone'),
                'email' => $request->input('email'),
                'insta' => $request->input('insta'),
                'face' => $request->input('face'),
                'twitter' => $request->input('twitter'),
            ]);
            if ($request->hasFile('image')) {
                $gen->clearMediaCollection('general');
                $gen->addMediaFromRequest('image')->toMediaCollection('general');
           
        }

        return redirect('admin/general');
    }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
