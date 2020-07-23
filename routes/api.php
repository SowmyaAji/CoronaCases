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

Route::get('coronas/{id}', function($id) {
    return Corona::find($id);
});

Route::get('coronas', 'CoronaController@index');
Route::get('coronas/{id}', 'CoronaController@show');
