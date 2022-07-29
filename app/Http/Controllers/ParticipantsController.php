<?php

namespace App\Http\Controllers;
use App\Models\EventModel;
use App\Models\ParticipantModel;
use Illuminate\Http\Request;

class ParticipantsController extends Controller
{
    // public function index($id)
    // {
    //     $eventS=EventModel::with(['participant','user'])->where('id',$id)
    //     ->first();
    //     $participants =  ParticipantModel::where('event_id',$id)
    //     ->get();
    //     // dd($events);
    //     return view ('participants.index')
    //     -> with(compact('eventS','participants'));
    // }

    public function index()
    {
        $participantM =  ParticipantModel::all();
        // dd($events);
        return view ('participants.index' , compact('participantM'));
    }
  

    public function create($id)
    {
        $eventM = EventModel::find($id);
        return view ('participants.create' , compact('eventM'));
    }
    
    public function store(Request $request)
    {
        $participantM = new ParticipantModel;
        $participantM->user_id = $request->user_id;
        $participantM->event_id = $request->event_id;
        $participantM->attending = $request->attending;
        $participantM->reason_for_not_attending = $request->reason_for_not_attending;
        $participantM->save();
        return redirect()->route('events.index');
        // dd($request);

    }

    public function edit($participant_id)
    {
        // dd($id);
        $participantM = ParticipantModel::find($participant_id);
        return view('participants.edit', compact('participantM'));
    }

    public function update(Request $request)
    {
        // dd($id);
        $participantM = ParticipantModel::find($request -> participant_id);
        $participantM->user_id = $request->user_id;
        $participantM->event_id = $request->event_id;
        $participantM->attending = $request->attending;
        $participantM->reason_for_not_attending = $request->reason_for_not_attending;
        $participantM->save();
        return redirect()->route('participants.index');
    }

    public function delete($id)
    {
        // dd($id);
        $participantM = ParticipantModel::find($id);
        $participantM->delete();
        return redirect()->route('participants.index');
    }

    
}
