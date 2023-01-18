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


    public function index()
    {

        $events = Event::all();
        return view('events.index')->with(compact('events'));
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
            'vote_limit' => 'required',
            'vote_cooldown' => 'required',
            'event_organizer' => 'required'
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
        $eventTypes = EventType::all();

        $events = Event::findOrFail($id);

       // $ticketTypes = eventType::where('id',$id)->get();
      //  dd($events);
        return view('events.edit')->with(compact('events','eventTypes'));
    }



    public function update(Request $request )
    {
//        $request->validate([

//            'type' => 'required',
//            'start_date' => 'required',
//            'end_date' => 'required',
//            'details' => 'required',
//            'vote_limit' => 'required',
//            'vote_cooldown' => 'required',
//            'event_organizer' => 'required',
//
//        ]);



        $event = Event::findOrFail($request->id);
        $data = $request->except(['_token']);
        // dd($data);
        $event->update($data);
        Session::flash('message',config("message.messages.updated"));
        return redirect()->route('events.index');
    }





    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();
        return redirect()->route('events.index')->with('message','event deleted successfully');
    }


    }

