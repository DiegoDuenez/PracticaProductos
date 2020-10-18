<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personas')->insert([

            'nombre'=>'Diego',
            'apellido_paterno'=>'Dueñez',
            'apellido_materno'=>'Villa',

        ]);
        DB::table('personas')->insert([

            'nombre'=>'Barbara',
            'apellido_paterno'=>'Limón',
            'apellido_materno'=>'Gonzalez',

        ]);
        DB::table('personas')->insert([

            'nombre'=>'Igmar',
            'apellido_paterno'=>'Salazar',
            'apellido_materno'=>'Rodriguez',

        ]);
        DB::table('personas')->insert([

            'nombre'=>'Jaime',
            'apellido_paterno'=>'Gutierrez',
            'apellido_materno'=>'Escobar',

        ]);
        DB::table('personas')->insert([

            'nombre'=>'Maria',
            'apellido_paterno'=>'Lopez',
            'apellido_materno'=>'Jimenez',

        ]);
        
        
    }
}
