<?php

use Illuminate\Http\Request;



//Route::middleware('auth:api')->get('/user', function (Request $request) {
  //  return $request->user();
/// });

Route::post('/quote', [
    'uses'=> 'QuoteController@postQuote'
]);
Route::get('/quotes', [
    'uses'=> 'QuoteController@getQuotes'
]);
Route::put('/quote/{id}', [
    'uses'=> 'QuoteController@putQuote'
]);
Route::delete('/quote/{id}', [
    'uses'=> 'QuoteController@deleteQuote'
]);
