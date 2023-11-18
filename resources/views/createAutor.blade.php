@extends('templates.template')
@section('content')
 <h1 class="text-center">Cadadstrar Autor</h1>
 <hr>

 <div class="col-8 m-auto">
    <form name="formCad" id="formCad" method="post" action="{{url('createAutor/Autor')}}">
        @csrf
        <input class="form-control" type="text" name="name" id="name" placeholder="nome do Autor:"><br>
        <input class="form-control" type="email" name="email" id="email" placeholder="e-mail do aultor"><br>
        <input class="form-control" type="password" name="password" id="password" placeholder="digite uma senha"><br>
        <input class="btn btn-primary" type="submit" value="Cadastrar">
    </form>
</div>

@endsection