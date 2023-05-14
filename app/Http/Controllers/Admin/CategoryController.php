<?php

namespace App\Http\Controllers\Admin;

use App\Models\Categories;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryFormRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Categories::all();
        return view('admin.category.index',compact("categories"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryFormRequest $request)
    {
        $val = $request->validated();
        $categories = Categories::create([
            'Title'=>$val['title'],
            'Slug' => $val['slug'],
            'metaDescription' => $val['metaDescription'],
            'Description' => $val['Description'],
            'popular' => $request->popular == true ? '1' : '0',
        ]);


        if ($request->hasFile('image')) {
            $categories->addMediaFromRequest('image')->usingName($categories->title)->toMediaCollection('images');
            return redirect('admin/category')->with('messegae', 'Category added Sucessfully');
        }
        
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
        $categories = Categories::findOrFail($id);
        return view('admin.category.edit', compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryFormRequest $request,$id)
    {
        $categories = Categories::findOrFail($id);
        $val = $request->validated();
        $categories->update([
            'Title' => $val['title'],
            'Slug' => $val['slug'],
            'metaDescription' => $val['metaDescription'],
            'Description' => $val['Description'],
            'popular' => $request->popular == true ? '1' : '0',
        ]);
        if ($request->hasFile('image')) {
            $categories->clearMediaCollection('images');
            $categories->addMediaFromRequest('image')->usingName($categories->Title)->toMediaCollection('images');
        }

        return redirect('admin/category')->with('messegae', 'Category updated Sucessfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $categories = Categories::find($id);
        $categories->delete();
        $categories->clearMediaCollection('images');
        return redirect('admin/category')->with('messegae', 'Category Deleted Sucessfully');
    }
}
