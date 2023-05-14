<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use App\Models\Categories;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\BlogFormRequest;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post  = Blog::all();
        $categories = Categories::all();
        return view('admin.blog.index', compact('post', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $post = Blog::all();
        $categories = Categories::all();
        return view('admin.blog.add', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BlogFormRequest $request)
    {
        $val = $request->validated();

        $categories = Categories::findOrFail($val['catID']);

        $post = $categories->blogposts()->create([
            'catId' => $val['catID'],
            'Title' => $val['title'],
            'Author' => $val['author'],
            'metaDescr' => $val['meta'],
            'Descr' => $val['descr'],
            'postdate' => $val['date'],
            'posttime' => $val['time'],
            'keyword' => $val['key'],
            'trending' => $request->status == true ? '1' : '0',
            'relatedTo' => $val['pstr']

        ]);
        if ($request->hasFile('image')) {
            $post->addMediaFromRequest('image')->usingName($post->Title)->toMediaCollection('blog');
        }

        return redirect('admin/blog')->with('message', 'Post added Successfull');
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
        $post = Blog::findOrFail($id);
        $categories = Categories::all();

        return view('admin.blog.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BlogFormRequest $request, $id)
    {
        $val = $request->validated();

        $post = Categories::findOrFail($val['catID'])
        ->blogposts()->where('id', $id)->first();
        if ($post) {
            $post->update([
                'catId' => $val['catID'],
                'Title' => $val['title'],
                'Author' => $val['author'],
                'metaDescr' => $val['meta'],
                'Descr' => $val['descr'],
                'postdate' => $val['date'],
                'posttime' => $val['time'],
                'keyword' => $val['key'],
                'trending' => $request->status == true ? '1' : '0',
                'relatedTo' => $val['pstr']

            ]);
        }
        if ($request->hasFile('image')) {
            $post->clearMediaCollection('blog');
            $post->addMediaFromRequest('image')->usingName($post->Title)->toMediaCollection('blog');
        }
        return redirect('admin/blog')->with('message', 'Post updated sucessfull');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        $blog->clearMediaCollection('images');
        return redirect('admin/blog')->with('messegae', 'Category Deleted Sucessfully');
    }
}
