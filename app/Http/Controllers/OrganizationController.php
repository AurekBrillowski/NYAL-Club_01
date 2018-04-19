<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Organization;

class OrganizationController extends Controller
{
    // ====================================================
    // Display a listing of the resource.
    //
    // @return \Illuminate\Http\Response
    //
    // @param myParam 
    public function index()
    {
        return Organization::all();
    }

    // ====================================================
    // Display the specified resource.
    //
    // @param  int  $id
    //
    // @return \Illuminate\Http\Response
    public function show($id)
    {
        $organization = Organization::findOrFail($id);
        return $organization;
        // return new OrganizationResource($organization);
    }

    // ====================================================
    // Store a newly created resource in storage.
    //
    // @param  \Illuminate\Http\Request  $request
    // @return \Illuminate\Http\Response
    //
    public function store(Request $request)
    {
        $organization = $request->isMethod('put') ? Organization::findOrFail($request->organization_id) : new Organization;

        $organization->id = $request->input('organization_id');
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

    // ====================================================
    // Remove the specified resource from storage.
    //
    // @param  int  $id
    // @return \Illuminate\Http\Response
    //
    public function destroy($id)
    {
        $organization = Organization::findOrFail($id);

        if($organization->delete()) {
            return $organization;
            // return new OrganizationResource($organization);
        }
    }

    // #######################################################





    
    // #######################################################
    // Show the form for creating a new resource.
     // @return \Illuminate\Http\Response
    public function create()
    {
        //
    }

    
    // #######################################################
     // Show the form for editing the specified resource.
     // @param  int  $id
     // @return \Illuminate\Http\Response
    public function edit($id)
    {
        //
    }

    // #######################################################
    // Update the specified resource in storage.
     
    // @param  \Illuminate\Http\Request  $request
    // @param  int  $id
    // @return \Illuminate\Http\Response
    public function update(Request $request, $id)
    {
        //
    }

}
