<?php

namespace App\Http\Controllers\Admin;

use App\Models\Event;
use App\Models\Causes;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\eventsFormRequest;

class eventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $event = Event::all();
        $causes = Causes::all();
        return view('admin.event.index', compact('event', 'causes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $events = Event::all();
        $causes = Causes::all();
        return view('admin.event.add', compact('events', 'causes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(eventsFormRequest $request)
    {
        $val = $request->validated();
        $causes = Causes::findOrFail($val['cId']);
        $events = $causes->events()->create($val);

        if ($request->hasFile('image')) {
            $events->addMediaFromRequest('image')->toMediaCollection('events');
        }
        return redirect('admin/event');
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
        $events = Event::findOrFail($id);
        $causes = Causes::all();
        return view('admin.event.edit', compact('events', 'causes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(eventsFormRequest $request, $id)
    {
        $val = $request->validated();
        $events = Causes::findOrFail($val['cId'])
        ->events()->where('id', $id)->first();
        if ($events) {
            $events->update($val);
            if ($request->hasFile('image')) {
                $events->clearMediaCollection('events');
                $events->addMediaFromRequest('image')->toMediaCollection('events');
            }
        }
      
        return redirect('admin/event');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $events = Event::find($id);
        $events->delete();
        $events->clearMediaCollection('images');
        return redirect('admin/event')->with('messegae', 'event Deleted Sucessfully');
    }
}
