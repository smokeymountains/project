<?php

namespace App\Http\Controllers\Admin;

use App\Models\Apeal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ApealFormRequest;
use App\Http\Requests\CauseFormRequest;
use App\Models\Categories;

class apealController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $apeals = Apeal::all();
        $apeal = apeal::all();
        return view('admin.apeals.index', compact(['apeals', 'apeal']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $apeals = Apeal::all();
        $categories = Categories::all();
        return view('admin.apeals.add', compact('apeals','categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ApealFormRequest $request)
    {
        $val = $request->validated();

        $categories = Categories::findOrFail($val['catID']);
        $apeals = $categories->apeals()->create([
            'catId' => $val['catID'],
            'Title' => $val['title'],
            'slug' => $val['slug'],
            'meta' => $val['metaDescr'],
            'descr' => $val['descr'],
            'status' => $request->status == true ? '1' : '0',
            'popular' => $request->visible == true ? '1' : '0',
            'date' => $val['date']


        ]);
        if ($request->hasFile('image')) {
            $apeals->addMediaFromRequest('image')->usingName($apeals->Title)->toMediaCollection('apeal');
            }
        return redirect('admin/apeals');
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
        $apeals = Apeal::findOrFail($id);
        $categories = Categories::all();
        return view('admin.apeals.edit', compact('apeals', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ApealFormRequest $request,$id)
    {
        $val = $request->validated();

        $apeals = Categories::findOrFail($val['catID'])
        ->apeals()->where('id', $id)->first();

        if ($apeals) {
            $apeals->update([
                'catId' => $val['catID'],
                'Title' => $val['title'],
                'meta' => $val['metaDescr'],
                'descr' => $val['descr'],
                'status' => $request->status == true ? '1' : '0',
                'popular' => $request->visible == true ? '1' : '0',
                'date' => $val['date']
            ]);
        }
        if ($request->hasFile('image')) {
            $apeals->clearMediaCollection('apeal');
            $apeals->addMediaFromRequest('image')->usingName($apeals->Title)->toMediaCollection('apeal');
        }
        return redirect('admin/apeals');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $apeal = Apeal::find($id);
        $apeal->delete();
        $apeal->clearMediaCollection('images');
        return redirect('admin/apeals')->with('messegae', 'Apeal Deleted Sucessfully');
    }
}
