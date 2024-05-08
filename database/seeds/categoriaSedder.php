<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class categoriaSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'nombreCategoria' => 'plasticos',
            'descripcion' => 'Productos echos con plasticos'
        ]);
    }
}
