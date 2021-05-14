<?php

use Illuminate\Database\Seeder;
use App\Maison;
class MaisonTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Maison::class,10)->create();

    }
}
