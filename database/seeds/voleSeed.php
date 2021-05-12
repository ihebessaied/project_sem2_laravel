<?php

use Illuminate\Database\Seeder;

class voleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\vole::class, 10)->create();
    }
}
