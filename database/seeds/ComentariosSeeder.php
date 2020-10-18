<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComentariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comentarios')->insert([

            'titulo'=>'MUY RICA',
            'contenido'=>'El mejor refresco de la competencia',
            'persona'=>1,
            'producto'=>1,

        ]);
        DB::table('comentarios')->insert([

            'titulo'=>'ME ENCANTA',
            'contenido'=>'Me gusta mucho el chocolate que usan',
            'persona'=>1,
            'producto'=>2,

        ]);
        DB::table('comentarios')->insert([

            'titulo'=>'PUEDEN SER MEJORES',
            'contenido'=>'Me gustaria que le agregaran más sabores',
            'persona'=>2,
            'producto'=>2,

        ]);
        DB::table('comentarios')->insert([

            'titulo'=>'MUY BUENOS',
            'contenido'=>'Me encantan son mis favoritos',
            'persona'=>3,
            'producto'=>3,

        ]);
        DB::table('comentarios')->insert([

            'titulo'=>'NO ME GUSTAN MUCHO',
            'contenido'=>'Tienen mucha sal',
            'persona'=>4,
            'producto'=>4,

        ]);
        DB::table('comentarios')->insert([

            'titulo'=>'ESTAN BIEN',
            'contenido'=>'Me gustan mucho pero tienen mucho queso',
            'persona'=>4,
            'producto'=>5,

        ]);
        DB::table('comentarios')->insert([

            'titulo'=>'EL MEJOR REFRESCO',
            'contenido'=>'Me gustan mucho, es delicioso',
            'persona'=>5,
            'producto'=>1,

        ]);
    }
}
