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

//Route::get('/', function () {
 //   return view('index');
// });

Route::view('/', 'index');

Route::get('/portfolio', function (){
    return view('portfolio', [
        "nama" => "Trent",
        "nilai" => [80, 70, 60]
    ]);
});

Route::get('/admin/staf', function ($mhs) {
    return view('admin.staf')
    ->  with('nama', 'Cancelo');
});

Route::get('/admin/mahasiswa/{mhs?}', function 
() {
    $mhs ="Kevin";

    return view('
    admin.mahasiswa',
     compact('mhs'));
});

