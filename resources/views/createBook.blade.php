@extends('templates.template')
@section('content')
 <h1 class="text-center"> @if(isset($book))Editar @else Cadastrar @endif </h1> <hr>

 

 <div class="col-8 m-auto">

            @if(isset($errors) && count($errors)>0)
                    <div class="text-center mt-4 mb-4 p-2 alert-danger">
                            @foreach ($errors->all() as $erro )
                            {{$erro}}<br>                    
                            @endforeach
                    </div>
            @endif

            <!-- iniciairemos apartiir daqui uma condiição na qual, se acionarmos o botão de cadastrar livros o nosso formulario 
            se comportara como um formulari de cadastro, e se acionarmos o botão de editar o nosso formulario se comportara como um 
            formulario de adição de dados(update)-->

            @if(isset($book)) <!-- se a variavel book existir nesse contesto é porque foi acionado o botão de editar, sendo assim sera usaro o cabeçalho de formulario para a ação de editar dados(update)-->
            <form name="formEdit" id="formEdit" method='POST' action="{{url("createBook/books/$book->id")}}"> <!-- essa url "createBook/books/$book->id" vai enviar os dados para a rota resource e la na controler os dados vao direto para o metodo update-->
               @method('PUT')
            @else
                <form name="formCad" id="formCad" method="post" action="{{url('createBook/books')}}">
            @endif
   
        @csrf
        <input class="form-control" type="text" name="title" id="title" placeholder="Título:" value="{{$book->title ?? ''}}"  ><br>
        <select class="form-control" name="id_user" id="id_user" >
            <option value="{{$book->relUsers->id ?? ''}}" >{{$book->relUsers->name ?? 'Autor'}}</option>
            @foreach($user as $users)
                <option value="{{$users->id}}">{{$users->name}}</option>
            @endforeach
        </select><br>
        <input class="form-control" type="text" name="pages" id="pages" placeholder="Páginas:" value="{{$book->pages ?? ''}}" ><br>
        <input class="form-control" type="text" name="price" id="price" placeholder="Preço:"value="{{$book->price ?? ''}}"  ><br>
        <input class="btn btn-primary" type="submit" value="@if(isset($book)) Editar @else Cadastrar @endif">
    </form>
</div>

@endsection