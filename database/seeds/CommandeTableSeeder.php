<?php

use Illuminate\Database\Seeder;
use App\Commande;

class CommandeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Commande::class,40)->create();
    }
}
