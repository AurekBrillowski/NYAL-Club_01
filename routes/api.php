<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



/* -------------------------------------------------------------------------- */
// List Event Organizations
Route::get('event_organizations', 'EventOrganizationController@index');

// List single Event Organization
Route::get('event_organization/{id}', 'EventOrganizationController@show');

// Delete Event Organization
Route::delete('event_organization/{id}', 'EventOrganizationController@destroy');

// Create new Event Organization
Route::post('event_organization', 'EventOrganizationController@store');

// Update Event Organization
Route::put('event_organization', 'EventOrganizationController@store');

/* -------------------------------------------------------------------------- */




Route::get('athletes', 'AthleteController@index');

// List organizations
Route::get('eventnames', 'EventNameController@index');

// List single organization
Route::get('eventname/{id}', 'EventNameController@show');

// Create new organization
Route::post('eventname', 'EventNameController@store');

// Update organization
Route::put('eventname', 'EventNameController@store');

// Delete organization
Route::delete('eventname/{id}', 'EventNameController@destroy');
