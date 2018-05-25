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
Route::get("/", "ProjectController@index");

Route::group(["prefix" => "projects"], function () {    
    Route::get("/novo", "ProjectController@novoView");
    Route::post("/store", "ProjectController@store")->name('project.store');
    Route::post("/show", "ProjectController@show")->name('project.show');
    Route::get("/import", "ProjectController@import_projectView");
});
