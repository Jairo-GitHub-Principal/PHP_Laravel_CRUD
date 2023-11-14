<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Response;
use App\Models\ModelBook; // importando a classe 
use App\Models\User; 
use Illuminate\Support\Facades\View;// importando a classe


class BookController extends Controller
{
    private $user;
    private $book;
    public function __construct(){ // metodo construtor
        $this->objUser = new User();  // instancia da classe User
        $this->objBook = new ModelBook(); // instancia da classe ModelBook

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // dd($this->objUser->find(2)->relBooks);       // codigo permite visualiizar os valores vindo da tabela sem nescessidade da implementação da viw
       $book = $this->objBook->all();
       return view('index', compact('book'));
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $user = $this->objUser->all();
        return view('create',compact('user')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        
        $cad=$this->objBook->create([
            'title'=>$request->title,
            'pages'=> $request->pages,
            'price'=> $request->price,
            'id_user'=> $request->id_user,
        ]);
        if($cad){return redirect('/');}
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        // echo $id;
        $book = $this->objBook->find($id);
        return view('show',compact('book')); // vai chamar a view show e exibir o conteudo da model book que  esta relacionado ao id recebido por parametro
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
