@extends('templates.template')
@section('content')
 <h1 class="text-center">Visualizar id</h1>
 <hr>

 @php
    $user = $book->find($book->id)->relUsers;
 @endphp
 
<div class="col-8 m-auto">
  Titulo: {{$book->title}}<br>
  Paginas: {{$book->pages}}<br>
  Preço: {{$book->price}}<br>
  Autor: {{$user->name}}<br>
  ID_Autor: {{$book->id_user}}<br>
  Email: {{$user->email}}
</div>
@endsection