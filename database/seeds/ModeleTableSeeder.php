<?php

use Illuminate\Database\Seeder;
use App\Modele;
class ModeleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Modele::class,4)->create();
    }
}