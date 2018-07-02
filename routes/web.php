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

Route::group(["prefix" => "projects"], function () {
    Route::get("/", "ProjectController@index");
    Route::get("/novo", "ProjectController@novoView");
    Route::post("/store", "ProjectController@store")->name('project.store');
    Route::post("/show", "ProjectController@show")->name('project.show');
    Route::get("/import", "ProjectController@import_projectView");
    Route::get("/login", "MemberController@loginView");
    Route::get("/register", "MemberController@registerView");
    Route::get('logout', "Auth\LoginController@logout")->name('logout');
    Route::get('/papeis', "ProjectController@papeis")->name('papeis');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');