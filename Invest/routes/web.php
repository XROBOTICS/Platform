<?php

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


// Route::get('/about', function () {
//     return view('about', [
//     	'name' => 'Investing' // тестирование передачи масисва переменных в вьюху
//     ]);
// });


// Route::get('/tasks', function () {
// 	$tasks = DB::table('tasks')->get();

//     return view('tasks.index', compact('tasks'));
// });


// Route::get('/tasks/{task}', function ($id) {
// 	$task = DB::table('tasks')->find($id);		//передаем в адресную строку id 

//     return view('tasks.show', compact('task'));
// });

Auth::routes();


Route::group(['middleware' => 'auth'], function () {
    
    Route::get('/home', 'HomeController@index')->name('home');

	Route::get('profile', 'ProfileController@index');
});


