<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerAndini;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tes/home', function () {
    return view('layouts.home', ['tittle' => 'Home']);
});
Route::get('/tes/biodata', function () {
    return view('tes.biodata', ['title' => 'Biodata']);
});
Route::get('/tes/profile', function () {
    return view('tes.profile', ['title' => 'Pofile']);
});
Route::get('/tes/contact', function () {
    return view('tes.contact', ['title' => 'Contact']);
});
Route::get('/index', function () {
    return view('template.index');
});
Route::get('template/contact',
[ControllerAndini::class, 'index']);



