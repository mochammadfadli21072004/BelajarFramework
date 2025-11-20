<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Barang;
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

Route::get('/iloveyou', function () {
    return view('welcome');
});

Route::get('/', function () {
    echo "julia galak";
});

Route ::view('/panggil_view','welcome');

Route::redirect('/alihkan','/');

Route::get('/parameter/{id}', function ($id) {
    echo "Julia galak" .$id;
});

Route::group(['prefix' => 'admin'], function(){
    Route::get('/parameter/{id}', function ($id) {
    echo "Julia galak" .$id;
    });

    Route::get('/Dasboard', function () {
    echo "ini Dasboard";
    });
});

Route::get('/route_cont/{id}',[Barang::class, 'index']); 
Route::get('/simpan_test', [Barang::class, 'simpan_get']); 
Route::get('/hapus_test/{id}', [Barang::class, 'hapus_get']); 
Route::get('/update_test/{id}', [Barang::class, 'update_get']);
Route::get('/view_test', [Barang::class, 'view_get']);