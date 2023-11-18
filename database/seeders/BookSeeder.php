<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ModelBook;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(ModelBook $book): void
    {
        $book->create([ 
            'title'=>'O senhor dos anéis',
            'pages'=>'100',
            'price'=>'10',
            'id_user'=>'2',
           
        ]);

        // $book->create([ 
        //     'title'=>'O senhor das armas',
        //     'pages'=>'100',
        //     'price'=>'10',
        //     'id_user'=>'1',
        // ]);

      
     }
}
