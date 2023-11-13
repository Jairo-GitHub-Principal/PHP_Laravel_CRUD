@extends('templates.template')
@section('content')
 <h1 class="text-center">Crud</h1>
 <hr>

 <div class="text-center mt-3 mb-4">
    <a href="">
        <button class="btn btn-success">Cadastrar</button>
    </a>
</div>

<div class="col-8 m-auto">
    <table class="table text-center">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Titulo</th>
            <th scope="col">Autor</th>
            <th scope="col">Paginas</th>
            <th scope="col">Preco</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach($book as $books)
                @php
                    $user=$books->find($books->id)->relUsers;
                @endphp
                <tr>
                    <th scope="row">{{$books->id}}</th>
                    <td>{{$books->title}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$books->pages}}</td>
                    <td>{{$books->price}}</td>
                    <td>
                        <a href="{{url("show/$books->id")}}">
                            <button class="btn btn-dark">Visualizar</button>
                        </a>

                        <a href="">
                            <button class="btn btn-primary">Editar</button>
                        </a>

                        <a href="">
                            <button class="btn btn-danger">Deletar</button>
                        </a>
                    </td>
                </tr>
            @endforeach
           
      
        </tbody>
    </table>
</div>
@endsection