<?php

use Illuminate\Support\Facades\Route;

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

// Returns the view responsible for rendering the home/landing page
Route::get('/', function () {
    return view('home');
});

// This is done by making a GET request to the base local URI and the response is the home view
Route::get('home', function () {
    return view('home');
});

// Pass the GET request to the list function in the student Controller to then return the view resposible for displaying all the students
// Creates a named route to allow the convient generation of URI or redirect for specific
Route::get('studentlisting', 'App\Http\Controllers\StudentController@list')->name('list_student');

// Returns the view responsible for rendering the specefied student/ID
Route::get('studentprofile/{}', 'App\Http\Controllers\StudentController@show');

// Pass the GET request to the list function in the Module Controller to then return the view resposible for displaying all the modules
Route::get('modulelisting', 'App\Http\Controllers\ModuleController@list')->name('list_module');

// Returns the view responsible for rendering the specefied module/ID
Route::get('moduledetails/{id}', 'App\Http\Controllers\ModuleController@show');
