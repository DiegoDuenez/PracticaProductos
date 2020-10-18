<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([

            'nombre'=>'Pepsi',
            'precio'=>15,

        ]);
        DB::table('productos')->insert([

            'nombre'=>'Chocoroles',
            'precio'=>12,

        ]);
        DB::table('productos')->insert([

            'nombre'=>'Pinguinos',
            'precio'=>10,

        ]);
        DB::table('productos')->insert([

            'nombre'=>'Sabritas',
            'precio'=> 13,
        ]);
        DB::table('productos')->insert([

            'nombre'=>'Doritos',
            'precio'=> 13,
        ]);
    }
}
