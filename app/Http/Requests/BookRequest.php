<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() // aqui sera implementado a autorização para o usuario que estiver logado, e não logado
    {
        return true;// o true determina que não é nescessario a autorização par o usuario, uma vez que não estamos trabalhando com o usuario logado ainda
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [ // aqui é definido as regras que determina a obrigatoriedade de preenchimento dos camps
            'title'=>'required', // aqui diz que  titulo é  de preenchimento obrigatorio 
            'id_user'=>'required',
            'pages'=>'required',
            'price'=>'required',
            
        ];
    }
    public function messages(){ // caso o campo de preenchimento obriigatorio não seja prenchiido, para cada campo teremos um retorno conforme a msg abaixo
        return [
            'title.required' =>'Campo titulo de preenchimento obrigatorio',
            'id_user.required' =>'Campo autor de preenchimento obrigatorio',
            'pages.required' =>'Campo pages de preenchimento obrigatorio numeric',
            'price.required' =>'Campo price de preenchimento obrigatorio'
        ] ;
    }
}
