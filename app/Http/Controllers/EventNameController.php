<?php

namespace App\Http\Controllers;

use App\Event_Name;
use Illuminate\Http\Request;

class EventNameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return EventName::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event_Name  $event_Name
     * @return \Illuminate\Http\Response
     */
    public function show(Event_Name $event_Name)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event_Name  $event_Name
     * @return \Illuminate\Http\Response
     */
    public function edit(Event_Name $event_Name)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event_Name  $event_Name
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event_Name $event_Name)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event_Name  $event_Name
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event_Name $event_Name)
    {
        //
    }
}
