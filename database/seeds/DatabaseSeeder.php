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
        // $this->call(UsersTableSeeder::class);
        $this->call(UsersTableseeder::class);
        $this->call(EventsTableseeder::class);
        $this->call(ModeleTableSeeder::class);
        $this->call(Join_eventTableseeder::class);
        $this->call(CarTableSeeder::class);
        $this->call(CommandeTableSeeder::class);
        $this->call(HouseSeeder::class);

    }
}
