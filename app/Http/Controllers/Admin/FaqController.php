<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FaqFormRequest;
use App\Models\Categories;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faqs=Faq::all();
        return view('admin.faq.index',compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.faq.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FaqFormRequest  $request)
    {
         $val = $request->validated();
        $faqs = Faq::create([
            'question' => $val['message'],
            'answer' => $request->input('ans'),
            'status' => $request->status == true ? '1' : '0',
        ]);
        $faqs->save();

        return redirect('admin/faq');
         
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
        $categories=Categories::all();
        $faqs=Faq::findOrFail($id);
        return view('admin.faq.edit',compact('faqs','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FaqFormRequest $request, $id)
    {
        $faqs = Faq::findOrFail($id);
        $val = $request->validated();
        $categories = Categories::findOrFail($val['catId']);
        if ($faqs) {
            $faqs=$categories->faqs()->update([
                'question' => $val['message'],
                'answer' => $request->input('ans'),
                'status' => $request->status == true ? '1' : '0',
            ]);
        }
        
        return redirect('admin/faq');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $faqs =Faq::find($id);
        $faqs->delete();
        return redirect('admin/faq')->with('messegae', 'Category Deleted Sucessfully');
    }
}
