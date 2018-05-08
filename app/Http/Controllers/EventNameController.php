<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EventName;

class EventNameController extends Controller
{
    /** ===============================================================
     * 1a. RETRIEVE ALL: Display a listing of the resource.
     * ================================================================
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return EventName::all();
    }
    // ----------------------------------------------------------------


    /** ===============================================================
     * 1b. RETRIEVE ONE: Display the specified resource.
     * ================================================================
     * @param  \App\Event_eventName  $event_eventName
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return EventName::findOrFail($id);
    }
    // ----------------------------------------------------------------


    /** ===============================================================
     * 2. DELETE: Remove the specified resource from storage.
     * ================================================================
     * @param  \App\Event_eventName  $event_eventName
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eventName = EventName::findOrFail($id);

        if($eventName->delete()) {
            return $eventName;
            // return new eventNameResource($eventName);
        }
    }
    // ----------------------------------------------------------------


    /** ===============================================================
     * 3 & 4. CREATE: Store a newly created resource in storage.
     * ================================================================
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $eventName = $request->isMethod('put') ? eventName::findOrFail($request->id) : new eventName;

        // PUT: Update
        // POST: Create
        if ($request->isMethod('put')) {
            $eventName = EventName::findOrFail($request->id);
        } else {
            $eventName = new EventName;
        }

        $eventName->id = $request->input('id');
        $eventName->event_name = $request->input('event_name');
        $eventName->alpha_sort_name = $request->input('alpha_sort_name');
        $eventName->NYAL_Season_id = $request->input('NYAL_Season_id');
        $eventName->Event_Organization_id = $request->input('Event_Organization_id');
        $eventName->Event_Type_id = $request->input('Event_Type_id');
        $eventName->club_race = $request->input('club_race');
        $eventName->school_race = $request->input('school_race');
        $eventName->month_id = $request->input('month_id');
        $eventName->race_website = $request->input('race_website');
        $eventName->tentative = $request->input('tentative');
        $eventName->confirmed = $request->input('confirmed');
        $eventName->data_updated = $request->input('data_updated');
        $eventName->current_year_date = $request->input('current_year_date');

        if($eventName->save()) {
            // return new eventNameResource($eventName);
            return $eventName;
            // return ($article);
        }
    }
    // ----------------------------------------------------------------






    // #######################################################
    // #######################################################


}
