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
    'text' => 'Laravel and its other first-party packages follow Semantic Versioning. Major framework releases are released every six months (~February and ~August), while minor and patch releases may be released as often as every week. Minor and patch releases should never contain breaking changes. When referencing the Laravel framework or its components from your application or package, you should always use a version constraint such as ^7.0, since major releases of Laravel do include breaking changes. However, we strive to always ensure you may update to a new major release in one day or less.',
    'homeLink' => 'Home'
  ];
  return view('documentation', $data);
})->name("Documentation");


Route::get('download', function () {
  $data = [
    'title' => 'DOWNLOAD',
    'subtitle' => 'Download page',
    'text' => "The Laravel framework has a few system requirements. All of these requirements are satisfied by the Laravel Homestead virtual machine, so it's highly recommended that you use Homestead as your local Laravel development environment.",
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
    'text' => "Laravel is a team of passionate developers from all around the world. We love building tools that make your life as a developer enjoyable, fun, and fulfilling. Follow us on Twitter and GitHub to keep up with what we're working on!",
    'homeLink' => 'Home'
  ];
  return view('about-us', $data);
})->name("About us");

Route::get('contact', function () {
  $data = [
    'title' => 'CONTACT',
    'subtitle' => 'Contact page',
    'text' => 'Laravel Partners are elite shops providing top-notch Laravel development and consulting. Each of our partners can help you craft a beautiful, well-architected project.',
    'homeLink' => 'Home'
  ];
  return view('contact', $data);
})->name("Contact");
