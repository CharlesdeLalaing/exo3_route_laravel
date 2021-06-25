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
    return view('about', compact('fruit'));
});

Route::get('/contact', function () {
    $nom = 'charles';
    $prenom = 'de lalaing';
    $num = '0477045080';
    return view('contact', compact('nom', 'prenom', 'num'));
});


// test solo ------------------------------------------------

Route::get('/test', function () {

    $test1 = 'Cacao';
    $test2 = 'Pastis des familles';

    $test3 = 'MolenGeek';
    $test4 = 'Salomon';

    return view('test', compact('test1', 'test2', 'test3', 'test4'));
});


//correction ---------------------------------------------

Route::get('/about2/{fruit}', function ($fruit) {
    dd($fruit);  //debugger et tu vois la ligne
    return view('pages.about2', compact('fruit'));
});


// next

Route::get('/contact2/{nom}/{prenom}/{num}', function($nom, $prenom, $num){
    return view('pages.contact2', compact('nom', 'prenom', 'num'));
});