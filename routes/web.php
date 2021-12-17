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
    'linkList' => [
      'documentation',
      'download',
      'shop',
      'about us',
      'contact',
    ],
  ];
  return view('home', $data);
})->name("/");


Route::get('documentation', function () {
  $data = [
    'title' => 'DOCUMENTATION',
    'subtitle' => 'Documentation page',
    'homeLink' => 'Home'
  ];
  return view('documentation', $data);
})->name("documentation");


Route::get('download', function () {
  $data = [
    'title' => 'DOWNLOAD',
    'subtitle' => 'Download page',
    'homeLink' => 'Home'
  ];
  return view('download', $data);
})->name("download");


Route::get('shop', function () {
  $data = [
    'title' => 'SHOP',
    'subtitle' => 'Shop page',
    'homeLink' => 'Home'
  ];
  return view('shop', $data);
})->name("shop");


Route::get('about-us', function () {
  $data = [
    'title' => 'ABOUT US',
    'subtitle' => 'About Us page',
    'homeLink' => 'Home'
  ];
  return view('about-us', $data);
})->name("about us");

Route::get('contact', function () {
  $data = [
    'title' => 'CONTACT',
    'subtitle' => 'Contact page',
    'homeLink' => 'Home'
  ];
  return view('contact', $data);
})->name("contact");
