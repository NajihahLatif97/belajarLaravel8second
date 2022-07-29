<?php

namespace App\Http\Controllers;

use App\Models\EventModel;
use Illuminate\Http\Request;
use App\Http\Requests\PostNewEvent;

class EventsController extends Controller
{
    public function index()
    {
        $events =  EventModel::paginate(3);
        // dd($events);
        return view ('events.index' , compact('events'));
    }

    public function create()
    {
        return view ('events.create');
    }
    
    public function store(PostNewEvent $request)
    {
        $eventM = new EventModel;
        $eventM->title = $request->title;
        $eventM->venue = $request->venue;
        $eventM->date = $request->date;
        $eventM->organizer_id = $request->organizer_id;
        $eventM->save();
        \Toastr::success('Event Stored Successfully!', 'Event Status', ["positionClass" => "toast-top-center"]);
        return redirect()->route('events.index');
        // dd($request);
    }

    public function edit($id)
    {
        // dd($id);
        $eventM = EventModel::find($id);
        return view('events.edit', compact('eventM'));
    }

    public function update(PostNewEvent $request)
    {
        // dd($id);
        $eventM = EventModel::find($request -> event_id);
        $eventM->title = $request->title;
        $eventM->venue = $request->venue;
        $eventM->date = $request->date;
        $eventM->organizer_id = $request->organizer_id;
        $eventM->save();
        return redirect()->route('events.index');
    }

    public function delete($id)
    {
        // dd($id);
        $eventM = EventModel::find($id);
        $eventM->delete();
        return redirect()->route('events.index');
    }

    // public function add(Request $request)
    // {
    //     // dd($id);
    //     $eventM = EventModel::find($id);
    //     $eventM->delete();
    //     return redirect()->route('events.index');
    // }
}
