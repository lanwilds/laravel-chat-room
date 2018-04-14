<?php

use App\Message;
use App\User;
use App\Events\MessagePosted;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//dd(Hash::make('123456789'));
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/messages',function(){

	return response()->json([
	    'messages' => Message::with('user')->get(),
	    'user' => Auth::user()
	]);
	

})->middleware('auth');
Route::post('/message',function(){
	
	$user = Auth::user();
	
	$message = $user->message()->create([
		'message' => request()->get('message')
	]);

	broadcast(new MessagePosted($message,$user));

	return ['status' => 'OK'];
})->middleware('auth');
