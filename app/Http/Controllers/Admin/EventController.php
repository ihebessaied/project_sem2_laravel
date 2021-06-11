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
        'event_image' => 'required|file',
        'favoir' => 'required|numeric|between:0,1',
        'event_description' => 'required|min:8',
        'event_start' => 'required|date|before:event_finish',
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
    $event=$validateData;
    $event['event_image'] = $request['event_image']->store('uploads', 'public');
    Event::create($event);
    return  redirect()->back();
    
      
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
        return view ('Admin.events.edit',['event'=>$event]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validateData =  $request->validate([
            'event_label' => 'required|min:2',
            'event_place' => 'required|min:3',
            'event_description' => 'required|min:3',
            'event_start' => 'required|date|before:event_finish',
            'favoir' => 'required|numeric|between:0,1',
            'event_finish' => 'required|date|after:event_start',
           ]);
           //Mass assignement

           $event = Event::find($id);

        $event['event_label']=$validateData['event_label'];
        $event['event_place']=$validateData['event_place'];
        $event['event_start']=$validateData['event_start'];
        $event['favoir']=$validateData['favoir'];
        $event['event_finish']=$validateData['event_finish'];
        $event['event_description']=$validateData['event_description'];

        if($request['event_image']){
            $event['event_image'] = $request['event_image']->store('uploads', 'public');
        }

        $event->update();
        return redirect()->back();
         
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
