<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class ModelBook extends Model
{
    protected $table='book';    
    protected $fillable=[
        'id_user','title','pages','price'
    ];

    public function relUsers(){ /* a qui na modelBook definimos o relacionamento entre livro e autor
                                nesse caso um livro so pode ter um autor */
        return $this->hasOne('App\Models\User','id','id_user');//1 livro so pode ter 1 autor po isso: hasOne
    }
}
