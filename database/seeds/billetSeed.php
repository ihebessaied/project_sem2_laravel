<?php

use Illuminate\Database\Seeder;

class billetSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\billet::class, 10)->create();    }
}
