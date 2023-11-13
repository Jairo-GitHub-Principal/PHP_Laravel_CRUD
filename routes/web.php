<?php
use Illuminate\Support\Facades\Route;
use Http\Controller\BookController;


//Route::get('/','App\Http\Controllers\BookController@index');
Route::resource('/show','App\Http\Controllers\BookController');
    
?>