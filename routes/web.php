<?php
use Illuminate\Support\Facades\Route;
use Http\Controller\BookController;


//Route::get('/','App\Http\Controllers\BookController@index');
Route::resource('/','App\Http\Controllers\BookController'); // rota da pagina index
//Route::get('/create','App\Http\Controllers\BookController@create');
Route::resource('/show','App\Http\Controllers\BookController'); // rota da pagina show
Route::get('/create','App\Http\Controllers\BookController@create');// abre a pagina de cadastro,acionada pelo botão cadastrar na pagina inicial
Route::resource('/create/books','App\Http\Controllers\BookController');//acionada pelo botão cadastrar do formulario, envia os dados para a controler bookController , onde 
// os dados enviados por essa rota sera recebido pelo metodo create() que os percistira no DB



    
?>