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
    'subtitle' => 'Hello Laravel',
    'linkList' => [
      'Documentation',
      'Download',
      'Shop',
      'About us',
      'Contact',
    ],
  ];
  return view('home', $data);
})->name("/");


Route::get('documentation', function () {
  $data = [
    'title' => 'DOCUMENTATION',
    'subtitle' => 'Documentation page',
    'text' => 'This is the documentation',
    'homeLink' => 'Home'
  ];
  return view('documentation', $data);
})->name("Documentation");


Route::get('download', function () {
  $data = [
    'title' => 'DOWNLOAD',
    'subtitle' => 'Download page',
    'text' => 'This is the download',
    'homeLink' => 'Home'
  ];
  return view('download', $data);
})->name("Download");


Route::get('shop', function () {
  $data = [
    'title' => 'SHOP',
    'subtitle' => 'Shop page',
    'text' => 'This is the shop',
    'homeLink' => 'Home'
  ];
  return view('shop', $data);
})->name("Shop");


Route::get('about-us', function () {
  $data = [
    'title' => 'ABOUT US',
    'subtitle' => 'About Us page',
    'text' => 'This is the about us',
    'homeLink' => 'Home'
  ];
  return view('about-us', $data);
})->name("About us");

Route::get('contact', function () {
  $data = [
    'title' => 'CONTACT',
    'subtitle' => 'Contact page',
    'text' => 'This is the contact',
    'homeLink' => 'Home'
  ];
  return view('contact', $data);
})->name("Contact");
