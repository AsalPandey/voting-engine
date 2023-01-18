<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\EventType;
use DataTables;
use Session;




class EventTypeController extends Controller
{

    public function index()
    {
        $eventTypes = EventType::all();
        return view('eventTypes.index')->with(compact('eventTypes'));
    }



    public function create()
    {
        return view('eventTypes.create');
    }


    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required',

        ]);
        $eventType = $request->except(['_token']);
//        dd($event);
        EventType::create($eventType);
        Session::flash('message',config("message.messages.created"));
        return redirect()->route('eventTypes.index');
    }





    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $eventType = eventType::findOrFail($id);
        return view('eventTypes.edit')->with(compact('eventType'));
    }


    public function update(Request $request)
    {
       //dd($request);
        $eventType = eventType::findOrFail($request->id);
        $data = $request->except(['_token']);
       // dd($data);
        $eventType->update($data);
        Session::flash('message',config("message.messages.updated"));
        return redirect()->route('eventTypes.index');
    }


    public function destroy($id)
    {


        $eventType = eventType::findOrFail($id);
        $eventType->delete();
        return redirect()->route('eventTypes.index');

    }
}
//return response()->json([
   // 'success'=> true,
   // 'message'=> config("message.messages.deleted"),
//]);
