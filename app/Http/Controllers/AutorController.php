<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ModelBook; // importando a classe 
use App\Models\User; 
use Illuminate\Support\Facades\View;// importando a classe

class AutorController extends Controller
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
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createAutor()
    {
       $user = $this->objUser->all();
        return view('createAutor',compact('user')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cadAutor=$this->objUser->create([
            'name'=>$request->name,
            'email'=> $request->email,
            'password'=> $request->password,
        ]);
        if($cadAutor){return redirect('/');}
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
       return view('show',compact('book'));
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
