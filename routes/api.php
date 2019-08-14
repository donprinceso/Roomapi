<?php

//use Illuminate\Http\Request;

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
Route::apiResource('/staffs','API\StaffController');
Route::apiResource('/rooms','API\RoomserviceController');
Route::apiResource('/events','API\EventcentanController');
Route::apiResource('/categorys','API\CategoriesController');
Route::group(['prefix' => 'staffs'], function () {
    Route::apiResource('/{staff}/reservations','API\ReservationController');
});
Route::get('/reservations/{reservation}','API\ReservationController@show');





