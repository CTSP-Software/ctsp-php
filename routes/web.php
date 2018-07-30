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
    Route::post("/store/{id}", "ProjectController@store")->name('project.store');
    Route::post("/show", "ProjectController@show")->name('project.show');
    Route::get("/import", "ProjectController@import_projectView");
    Route::get("/login", "MemberController@loginView");
    Route::get("/register", "MemberController@registerView");
    Route::get('logout', "Auth\LoginController@logout")->name('logout');
    Route::get('/papeis/{resultado2}', "ProjectController@papeis")->name('papeis');
    Route::get('/membros/{resultado2}', "ProjectController@membros")->name('membros');
    Route::get('/status/{id}', "MemberController@status")->name('status')->middleware('status');
    Route::get('/not_status/{id}', "MemberController@not_status")->name('not_status')->middleware('status');
    Route::post('/store_team/{project_id}/{user_id}', "PapeisController@store")->name('store.team');
    Route::get("/product_backlog/{resultado2}", "ProjectController@productBacklog")->name('product_backlog');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/perfil', 'MemberController@show_perfil')->name('perfil')->middleware('auth');
Route::post('/update', 'MemberController@update')->name('perfil.update')->middleware('auth');
