<?php

namespace App\Http\Controllers\Admin;

use App\Event;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //with pagination
        //  $event=Event::paginate(4);
        // return view('admin.events.index',['eventss'=>$event]);
        //without pagination
        return view('Admin.events.index',['eventss'=>Event::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('admin.events.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    //  dd($request);
    $validateData =  $request->validate([
       'event_label' => 'required|min:8',
       'event_place' => 'required|min:8',
       'event_start' => 'required|date|after:tomorrow',
       'event_finish' => 'required|date|after:event_start',
       ]);
        // 1er method
    //   $event = new Event;
    //   $event->event_label = $request->event_label;
    //   $event->event_place = $request->event_place;
    //   $event->event_start = $request->event_start;
    //   $event->event_finish = $request->event_finish;
    //   $event->save();
    // 2 EME method
    $event = Event::create($validateData);
    return  redirect()->route('events.show',$event);
    
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
        return view('admin.events.show',['event'=>$event]); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
        $event->delete();
         return redirect()->route('events.index');
    }
}
