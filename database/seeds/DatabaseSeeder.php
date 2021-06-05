<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableseeder::class);
        $this->call(EventsTableseeder::class);
        $this->call(ModeleTableseeder::class);
        $this->call(Join_eventTableseeder::class);
        $this->call(CarTableseeder::class);
        $this->call(HouseSeeder::class);
        $this->call(CommandeTableseeder::class);
    }
}
