<?php
use App\Videos;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/home/', 'VidHostController@index');

// Route::get('/Videos', function () {
//     $videos=Videos::all();
// });
// Route::get('/Reaction', function () {
//     return view('welcome');
// });
// Route::get('/Subscribers', function () {
//     return view('welcome');
// });
Route::post('/Videos','VidHostController@fileUpload');