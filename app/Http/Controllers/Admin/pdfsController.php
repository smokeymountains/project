<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pdfs;
use App\Models\Apeal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PdfsFormrequest;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class pdfsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pdfs = Pdfs::all();
        $apeals = Apeal::all();

        //return $pdfs;
        return view('admin.pdf.index', compact('pdfs', 'apeals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $apeals = Apeal::all();

        return view('admin.pdf.add', compact('apeals'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PdfsFormrequest $request)
    {
        $val = $request->validated();
        $apeals = Apeal::findOrFail($val['ApId']);

        $request->validate([
            'file' => 'required|mimes:pdf,csv,xls|max:2048'
        ]);
     
        $pdfs = $apeals->pdfs()->create([
            'ApId' => $val['ApId'],
            'Title' => $val['title'],
            'Descr' => $val['descr'],
            'Date' => $val['date'],


        ]);
        if ($request->hasfile('file')) {
            $pdfs->addMediaFromRequest('file')->usingName($pdfs->Title)->toMediaCollection('files');
        }


        return redirect('admin/pdf');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $pdfs=Pdfs::findOrFail($id);
        return $pdfs->getFirstMedia('files');
       //return  $mediaItem;// ->getFirstMedia('files');
       // $file=Media::all();
       // return response('file')->download($mediaItem->getPath('files'), $mediaItem->file_name);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pdfs = Pdfs::find($id);

        //return $cause;
        $apeals = Apeal::all();
        return view('admin.pdf.edit', compact('pdfs', 'apeals'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PdfsFormrequest $request, $id)
    {
        $val = $request->validated();

        $request->validate([
            'file' => 'required|mimes:pdf,csv,xls|max:2048'
        ]);
        $pdfs = Apeal::findOrFail($val['ApId'])
            ->pdfs()->where('id', $id)->first();
        if ($pdfs) {
            $pdfs->update([
                'ApId' => $val['ApId'],
                'Title' => $val['title'],
                'Descr' => $val['descr'],
                'Date' => $val['date'],

            ]);
        }

        if ($request->hasfile('file')) {
            $pdfs->clearMediaCollection('files');
            $pdfs->addMediaFromRequest('file')->usingName($pdfs->Title)->toMediaCollection('files');
        }

        return redirect('admin/pdf');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pdfs = Pdfs::find($id);
        $pdfs->delete();
        $pdfs->clearMediaCollection('images');
        return redirect('admin/pdf')->with('messegae', 'Category Deleted Sucessfully');
    }
}
