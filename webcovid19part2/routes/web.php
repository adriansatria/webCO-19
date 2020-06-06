<?php

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

Route::get('/', function () {
    return view('welcome');
});

// ROUTE YANG DAPAT DIAKSES DAN TIDAK PERLU LOGIN
Route::get('/dashboard', 'IndexController@index');
Route::get('/dashboard/cari', 'IndexController@cari');
Route::post('/dashboard', 'IndexController@store');


Route::get('/provinsi', 'StatistikController@indexstatik');
Route::get('/provinsi/cari', 'StatistikController@Searchdata2');

Route::get('/kontak', 'RsController@indexrs');
Route::get('/kontak/cari', 'RsController@carirs');
Route::get('/kontak/introvirus', 'RsController@virus');

Route::auth();
// VALIDASI APAKAH USER SUDAH LOGIN
Route::group(['middleware' => 'auth'], function(){
// JIKA SUDAH ROUTE DAPAT DIAKSES PENUH
Route::get('/dashboard2', 'HomeController@index');
Route::get('/dashboard2/statistik', 'HomeController@tambah');
Route::get('/dashboard2/cari', 'HomeController@cari2');
Route::get('/dashboard2/{id}/edit', 'HomeController@edit');
Route::post('/dashboard2', 'HomeController@store');
Route::patch('/dashboard2/{id}', 'HomeController@update');
Route::delete('/dashboard2/{id}', 'HomeController@destroy');

Route::get('/profile', 'IndexController@profile');

Route::get('/kontakv2', 'RsController@indexrsv2');
Route::get('/kontakv2/cari', 'RsController@carirs2');
Route::get('/kontakv2/formRS', 'RsController@pagetambah');
Route::get('/kontakv2/{id}/edit', 'RsController@editrs');
Route::get('/kontakv2/introvirusv2', 'RsController@virusv2');
Route::post('/kontakv2', 'RsController@storers');
Route::patch('/kontakv2/{id}', 'RsController@updaters');

Route::get('/provinsi2', 'StatistikController@indexstatik2');
Route::get('/provinsi2/statistikv2', 'StatistikController@tambahdata');
Route::get('/provinsi2/cari', 'StatistikController@Searchdata');
Route::get('/provinsi2/{id}/editpage', 'StatistikController@editpage');
Route::post('/provinsi2', 'StatistikController@storedata');
Route::patch('/provinsi2/{id}', 'StatistikController@updatestatistik');

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
