<?php

// USE ROUTER CLASS
use NicehalfCore\System\Routers\Route;

// ADD ROUTES
Route::get('/', 'HomeController@index');

Route::get('/home', function () {
    return "Welcome to home page";
});