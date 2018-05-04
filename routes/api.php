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

Route::get('athletes', 'AthleteController@index');


/* ========================================================================== */
/* TABLE: Event_Organizations                                                 */
/* ========================================================================== */

// RETRIEVE "All" Event Organizations
Route::get('event_organizations', 'EventOrganizationController@index');

// RETRIEVE "One" Event Organization
Route::get('event_organization/{id}', 'EventOrganizationController@show');

// DELETE an Event Organization
Route::delete('event_organization/{id}', 'EventOrganizationController@destroy');

// CREATE a "New" Event Organization
Route::post('event_organization', 'EventOrganizationController@store');

// UPDATE an "Existing" Event Organization
Route::put('event_organization', 'EventOrganizationController@store');
/* -------------------------------------------------------------------------- */


/* ========================================================================== */
/* TABLE: Event_Names                                                         */
/* ========================================================================== */

// RETRIEVE "All" Event Names
Route::get('event_names', 'EventNameController@index');

// RETRIEVE "One" Event Name
Route::get('event_name/{id}', 'EventNameController@show');

// CREATE a "New" Event Name
Route::post('event_name', 'EventNameController@store');

// UPDATE a "Existing" Event Name
Route::put('event_name', 'EventNameController@store');

// DELETE an "Existing" Event Name
Route::delete('event_name/{id}', 'EventNameController@destroy');
/* -------------------------------------------------------------------------- */


