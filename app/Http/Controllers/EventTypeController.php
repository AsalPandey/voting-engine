<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\EventType;
use DataTables;
use Session;




class EventTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventTypes = EventType::all();
        return view('eventTypes.index')->with(compact('eventTypes'));
    }



    public function create()
    {
        return view('eventTypes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */



    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $eventType = eventType::findOrFail($id);
        return view('eventTypes.edit')->with(compact('eventType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $eventType = eventType::findOrFail($request->id);
        $data = ($request->all());
       // dd($data);
        $eventType->update($data);
        return redirect()->route('eventTypes.index')
            ->with('success','Product updated successfully');

        Session::flash('message',config("message.messages.updated"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


        $eventType = eventType::findOrFail($id);
        $eventType->delete();
        return response()->json([
            'success'=> true,
            'message'=> config("message.messages.deleted"),
        ]);
    }
}
