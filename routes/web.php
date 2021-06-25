<?php

use Facade\FlareClient\View;
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

Route::get('/about', function () {
    $fruit = 'pomme';
    return view('about') . 'j\'aime manger des ' .$fruit;
});



Route::get('/contact', function () {
    $nom = 'charles';
    $prenom = 'de lalaing';
    $num = '0477045080';
    return view('contact') . 'mon nom c\'est ' .$nom .$prenom .'et mon num de tel c\'est ' .$num;
});
