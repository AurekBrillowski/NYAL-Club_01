<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Requests;
use App\EventOrganization;

class EventOrganizationController extends Controller
{
    /** ===============================================================
     * 1a. RETRIEVE ALL: Display a listing of the resource.
     * ================================================================
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return EventOrganization::all();
    }
    // ----------------------------------------------------------------


    /** ===============================================================
     * 1b. RETRIEVE ONE: Display the specified resource.
     * ================================================================
     * @param  \App\Event_Organization  $event_Organization
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return EventOrganization::findOrFail($id);
        // $organization = Organization::findOrFail($id);
        // return $organization;
        // return new OrganizationResource($organization);
    }
    // ----------------------------------------------------------------


    /** ===============================================================
     * 2. DELETE: Remove the specified resource from storage.
     * ================================================================
     * @param  \App\Event_Organization  $event_Organization
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $organization = EventOrganization::findOrFail($id);

        if($organization->delete()) {
            return $organization;
            // return new OrganizationResource($organization);
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

        // $organization = $request->isMethod('put') ? Organization::findOrFail($request->id) : new Organization;

        // PUT: Update
        // POST: Create
        if ($request->isMethod('put')) {
            $organization = EventOrganization::findOrFail($request->id);
        } else {
            $organization = new EventOrganization;
        }

        $organization->id = $request->input('id');
        $organization->organization_name = $request->input('organization_name');
        $organization->organization_abbreviation = $request->input('organization_abbreviation');
        $organization->organization_website = $request->input('organization_website');
        $organization->contact_name = $request->input('contact_name');
        $organization->contact_phone = $request->input('contact_phone');
        $organization->rm_state = $request->input('rm_state');

        if($organization->save()) {
            // return new OrganizationResource($organization);
            return $organization;
            // return ($article);
        }
    }
    // ----------------------------------------------------------------






    // #######################################################
    // #######################################################




    /** ===============================================================
     * Show the form for creating a new resource.
     * ================================================================
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    // ----------------------------------------------------------------


    /** ===============================================================
     * Show the form for editing the specified resource.
     * ================================================================
     * @param  \App\Event_Organization  $event_Organization
     * @return \Illuminate\Http\Response
     */
    public function edit(Event_Organization $event_Organization)
    {
        //
    }
    // ----------------------------------------------------------------


    /** ===============================================================
     * Update the specified resource in storage.
     * ================================================================
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event_Organization  $event_Organization
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event_Organization $event_Organization)
    {
        //
    }
    // ----------------------------------------------------------------

}
