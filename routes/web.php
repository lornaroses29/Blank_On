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
    $html = "
        <h1>Contact App</h1>
        <div>
            <a href='/contacts'>All Contacts</>
            <br>
            <a href='/contacts/create'>Add Contacts</>
            <br>
            <a href='/contacts/1'>Show Contacts</>
            <br>
        </div>
    ";

    return $html;
});

Route::get('/contacts', function () {
    return "<h1>Daftar Kontak</h1>";
});

Route::get('/contacts/{id}', function ($id) {
    return "ini kontak ke-". $id;
})->whereNumber('id');

Route::get('/contacts/create', function () {
    return "<h1>Tambah Kontak Baru</h1>";
});

Route::get('/companies/{name?}', function ($name=null) {
    if ($name) {
        return "Nama Perusahaan : ". $name;
    } else {
        return "Nama Perusahaan Kosong";
    }
})->whereAlphaNumeric('name');