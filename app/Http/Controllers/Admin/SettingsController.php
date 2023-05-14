<?php

namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SettingsFormRequest;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $home = Setting::all();
        return view('admin.settings.index', compact('home'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.settings.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SettingsFormRequest $request)
    {
        $val = $request->validated();
        $settings = Setting::create([
            'descr' => $val['Descr'],
            'title' => $val['title'],
        ]);
        if ($request->hasFile('image')) {
            $settings->addMediaFromRequest('image')->toMediaCollection('home');
        }


        return redirect('admin/settings');
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
    public function destroy($id)
    {
        $settings = Setting::find($id);
        $settings->delete();
        $settings->clearMediaCollection('home');
        return redirect('admin/settings');
    }
}
