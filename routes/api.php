<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Corona;
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

Route::get('coronas', function() {
    return Corona::all();
});

Route::get('coronas/{corona}', function($corona) {
    return Corona::find($corona);
});

Route::post('coronas', function(Request $request) {
     return Corona::create($request->all);
 });

Route::put('coronas{corona}', function(Request $request, $corona) {
     $corona = Corona::findOrFail($corona);
     $corona->update($request->all());

     return $corona;
 });

Route::delete('coronas/{corona}', function($corona) {
    Corona::find($corona)->delete();
    return 204;
 });


Route::get('coronas', 'APIController@index');
Route::get('coronas/{corona}', 'APIController@show');
Route::post('coronas', 'APIController@store');
Route::put('coronas/{corona}', 'APIController@update');
Route::delete('coronas/{corona}', 'APIController@delete');

