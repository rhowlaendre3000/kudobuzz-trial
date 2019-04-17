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
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
}); */


Route::get('v1/dashboard/', 'shopifyController@index');
Route::post('/v1/shop', 'shopifyController@createstore');
Route::post('/v1/shop/{shop_id}/feed', 'shopifyController@createfeed');
Route::post('/v1/shop/{shop_id}/product', 'shopifyController@addproduct');
Route::get('/v1/feeds', 'feedsController@index');
Route::get('/v1/feeds/{feedID}', 'feedsController@show');