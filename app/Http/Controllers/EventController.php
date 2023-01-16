<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\EventType;
use App\DataTables\EventsDataTable;
use Session;




class EventController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

        $events = Event::all();
        return view('events.index')->with(compact('events'));
    }

    public function getEventsJson(Request $request) {

        $event = event::query();
        return DataTables::of($event)->toJson();
    }



    public function create()
    {
        $eventTypes = eventType::all();
        return view('events.create')->with(compact('eventTypes'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'type' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'details' => 'required',
            'quantity' => 'required'
        ]);




        $event = Event::create([
            'type' => $request->type,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'details' => $request->details,
            'vote_limit' => $request->vote_limit,
            'vote_cooldown' => $request->vote_cooldown,
            'event_organizer' => $request->event_organizer,


        ]);


        //event::create($request->post());

        return redirect()->route('events.index');

    }







    public function show(event $events)
    {}



    public function edit($id)
    {
        $event = event::findOrFail($id);
        $ticketTypes = eventType::where('id',$id)->get();
        return view('events.edit')->with(compact('event','event'));
    }



    public function update(Request $request, event $events)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);

        $events->update($request->all());

        return redirect()->route('events.index')
            ->with('success','Product updated successfully');
    }





    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();
        return redirect()->route('events.index')->with('message','event deleted successfully');
    }


    }

