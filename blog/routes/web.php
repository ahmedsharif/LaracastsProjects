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

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');

// Route::get('/', function() {
//     return view('welcome', [
//         'foo' => 'bar',
//         'tasks' => [
//             'Go to the store',
//             'Go to the market',
//             'Go to work',
//             'Go to the concert'
//         ]
//     ]);

//     // return view('welcome')->withTasks($tasks)->withFoo('foo');

// });

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });
