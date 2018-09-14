<?php

use Illuminate\Support\Facades\Input;
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
Auth::routes();
Route::get('/', function(){
	//  $user = Session::get('user-id');
/*	if(!$user){
		return view('nologin');
	}*/

    return view('welcome');

})->name('welcome');

Route::post('/', function(){
	$identification = Input::get('identification');
	$user = \App\User::firstOrCreate(['identification' =>  $identification]);
	return view('welcome')->with('user', $user);	
})->name('welcome');

Route::get('/gracias', function(){
	Session::put('user-id',null);
    return view('gracias');

})->name('gracias');

Route::get('/home', 'HomeController@index')->name('home');

/*Route::get('import', function() {
	return view('import');
})->middleware('auth', 'role:admin');*/

Route::get('/scorer/sorteo', 'ScorerController@sorteo')->name('scorer.sorteo')->middleware('auth', 'role:admin');
Route::post('/scorer/sorteo', 'ScorerController@sorteo')->name('scorer.sorteo')->middleware('auth', 'role:admin');

Route::resource('scorer', 'ScorerController');
Route::get('/users/import', 'UserController@getImport')->name('users.import');
Route::post('/users/import', 'UserController@parseImport')->name('users.import.csv');
Route::resource('users', 'UserController');

Route::group(['middleware' => ['auth:api']], function () {
    Route::get('api-user', function () {
		$user = \Auth::user();
		Session::put('user-id', $user->id);
		return redirect('/');
    });
});
