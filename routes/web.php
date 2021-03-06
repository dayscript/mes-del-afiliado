<?php

use App\User;
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
    
    return view('welcome');

})->name('welcome');

Route::post('/actualizacion-datos', function(){
	$user = User::where('identification', '=', Input::get('identification'))->first();
	if ($user === null) {
	    return Redirect::to('/')->with('message', 'Usuario no registrado en la base de datos');
	}else{
	Session::put('user-id', $user->id);
	return view('actualizacion')->with('user', $user);
	}
})->name('welcome');

Route::get('/actualizacion-datos', function(Request $request){
	$id = Session::get('user-id');
	$user = User::find($id);
	return view('actualizacion')->with('user', $user);
})->name('welcome');


Route::get('/gracias', function(){
	Session::put('user-id',null);
    return view('gracias');

})->name('gracias');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/scorer/sorteo', 'ScorerController@sorteo')->name('scorer.sorteo')->middleware('auth', 'role:admin');
Route::post('/scorer/sorteo', 'ScorerController@sorteo')->name('scorer.sorteo')->middleware('auth', 'role:admin');
Route::get('/scorer/ganadores', 'ScorerController@ganadores')->middleware('auth', 'role:admin');

Route::resource('scorer', 'ScorerController');
Route::get('/users/import', 'UserController@getImport')->name('users.import')->middleware('auth', 'role:admin');
Route::post('/users/import', 'UserController@parseImport')->name('users.import.csv')->middleware('auth', 'role:admin');
Route::resource('users', 'UserController');

Route::group(['middleware' => ['auth:api']], function () {
    Route::get('api-user', function () {
		$user = \Auth::user();
		Session::put('user-id', $user->id);
		return redirect('/');
    });
});
