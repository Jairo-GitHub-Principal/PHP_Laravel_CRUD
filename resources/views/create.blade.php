@extends('templates.template')
@section('content')
 <h1 class="text-center">Cadadstrar</h1>
 <hr>

 <div class="col-8 m-auto">
    <form name="formCad" id="formCad" method="post" action="{{url('create/books')}}">
        @csrf
        <input class="form-control" type="text" name="title" id="title" placeholder="Título:"><br>
        <select class="form-control" name="id_user" id="id_user">
            <option value="">Selecione o Autor</option>
            @foreach($user as $users)
                <option value="{{$users->id}}">{{$users->name}}</option>
            @endforeach
        </select><br>
        <input class="form-control" type="text" name="pages" id="pages" placeholder="Páginas:"><br>
        <input class="form-control" type="text" name="price" id="price" placeholder="Preço:"><br>
        <input class="btn btn-primary" type="submit" value="Cadastrar">
    </form>
</div>

@endsection