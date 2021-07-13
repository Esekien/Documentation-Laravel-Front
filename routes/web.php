<?php

use App\Http\Controllers\Welcome;
use Illuminate\Support\Facades\Route;


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

Route::get('/welcome', function () {
    return view('welcome');
});




Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () 
{
	Route::page('Dashboard', '/');
	Route::front('User');
	Route::front('Version');
	Route::front('Documentation');
});


Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

Route::get('/', [Welcome::class, 'index'])->name('sidebar');
Route::get('/{documentationPage}', [Welcome::class, 'page'])->name('documentationPage');
//Route::get('/{documentationPage}/{version}', [Welcome::class, 'versionpage'])->name('versionpage');
