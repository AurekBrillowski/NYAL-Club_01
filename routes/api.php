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

// List organizations
Route::get('organizations', 'OrganizationController@index');

// List single organization
Route::get('organizations/{id}', 'OrganizationController@show');

// Create new organization
Route::post('organization', 'OrganizationController@store');

// Update organization
Route::put('organization', 'OrganizationController@store');

// Delete organization
Route::delete('organization/{id}', 'OrganizationController@destroy');
