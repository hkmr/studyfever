<?php

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


Route::get('/about', function () {
    return view('about');
});

Route::get('/', function()
{
 $page_title = 'Home';
 return View::make('index')->with('title',
 $page_title);
});

Route::get('/blogs', function () {
    return view('blogs');
});


Route::get('/search-result', function () {
    return view('/search.search-result');
});

Route::get('/question', function()
{
 $page_title = "Questions";
 return View::make('question')->with('title',
 $page_title);
});


