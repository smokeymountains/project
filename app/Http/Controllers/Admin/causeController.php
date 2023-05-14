<?php

namespace App\Http\Controllers\Admin;

use App\Models\Causes;
use App\Models\Categories;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CauseFormRequest;

class causeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $causes = Causes::all();
        $categories = Categories::all();
        return view('admin.cause.index', compact('causes', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categories::all();
        return view('admin.cause.addCause', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CauseFormRequest $request)
    {
        $val = $request->validated();

        $categories = Categories::findOrFail($val['catID']);


        $causes = $categories->causes()->create([
            'catId' => $val['catID'],
            'Title' => $val['title'],
            'MetaDescr' => $val['metaDescr'],
            'Description' => $val['descr'],
            'slug' => $val['slug'],

            'causeGoal' => $val['causeGoal'],
            'status' => $request->status == true ? '1' : '0',
            'popular' => $request->pop == true ? '1' : '0',
            'catId'  => $val['catID']

        ]);
        if ($request->hasFile('image')) {
            $causes->addMediaFromRequest('image')->usingName($causes->Title)->toMediaCollection('causes');
        }
        return redirect('admin/cause')->with('message', 'Successfull');
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
        $cause = Causes::find($id);

        $categories = Categories::all();
        return view('admin.cause.editCause', compact('cause', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CauseFormRequest $request,$id)
    {
        $val = $request->validated();

        $cause = Categories::findOrFail($val['catID'])
            ->causes()->where('id', $id)->first();
          
        if ($cause) {
            $cause->update([
                'catId' => $val['catID'],
                'Title' => $val['title'],
                'MetaDescr' => $val['metaDescr'],
                'Description' => $val['descr'],
                'slug' => $val['slug'],
                'causeGoal' => $val['causeGoal'],
                'availableAmount' =>$val['availableAmount'],       
                'status' => $request->status == true ? '1' : '0',
                'popular' => $request->pop == true ? '1' : '0',

            ]);
            if ($request->hasFile('image')) {
                $cause->clearMediaCollection('causes');
                $cause->addMediaFromRequest('image')->usingName($cause->Title)->toMediaCollection('causes');
            }
        }
       
        return redirect('admin/cause')->with('message', 'Successfull Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $causes = Causes::find($id);
        $causes->delete();
        $causes->clearMediaCollection('images');
        return redirect('admin/cause')->with('messegae', 'causes Deleted Sucessfully');
    }
}
