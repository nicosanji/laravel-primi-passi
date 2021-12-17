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
  $data = [
    'title' => 'HOMEPAGE',
    'subtitle' => 'My first laravel page',
    'text' => 'Hello World',
    'navlinks' => [
      'Link 1',
      'Link 2',
      'Link 3',
      'Link 4'
    ],
    'aboutUsLink' => 'About Us'
  ];
  return view('home', $data);
})->name("/");


Route::get('/about-us', function () {
  $data = [
    'title' => 'ABOUT US',
    'subtitle' => 'My second laravel page',
    'homeLink' => 'Go to Home'
  ];
  return view('about-us', $data);
})->name("about-us");
