<?php
use Illuminate\Support\Facades\Route;
use Http\Controller\BookController;


//Route::get('/','App\Http\Controllers\BookController@index');
Route::resource('/','App\Http\Controllers\BookController'); // rota da pagina index
//Route::get('/create','App\Http\Controllers\BookController@create');

Route::resource('/show','App\Http\Controllers\BookController'); // rota da pagina show

// a rota abaixo � usado para fazer o acesso ao formulario de cadastro e de update, ja a persistencia dos dados � feita pela rota create/books
Route::get('/createBook','App\Http\Controllers\BookController@createBook');// abre a pagina de cadastro,acionada pelo bot�o cadastrar livros na pagina inicial
// a rota abaixo � usada para persistir os dados para cadastro, update, etamb�m para fazer o delte
Route::resource('/createBook/books','App\Http\Controllers\BookController');//acionada pelo bot�o cadastrar do formulario, envia os dados para a controler bookController , onde 
// os dados enviados por essa rota sera recebido pelo metodo create() que os percistira no DB

// cadastrar usuario (autor)
Route::get('/createAutor','App\Http\Controllers\AutorController@createAutor');// abre a pagina de cadastro,acionada pelo bot�o cadastrar autor na pagina inicial
Route::resource('/createAutor/Autor','App\Http\Controllers\AutorController');//acionada pelo bot�o cadastrar do formulario, envia os dados para a controler bookController 

// deletar
//Route::delete('/deleteBook','App\Http\Controllers\AutorController@destroier');
    
?>