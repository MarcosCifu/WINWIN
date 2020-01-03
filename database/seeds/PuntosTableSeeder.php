<?php

use Illuminate\Database\Seeder;

class PuntosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Punto::class, 5)->create();
    }
}
