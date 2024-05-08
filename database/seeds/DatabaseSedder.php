<?php

use Illuminate\Database\Seeder;

class DatabaseSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $this->call(categoriaSedder::class);
    }
}
