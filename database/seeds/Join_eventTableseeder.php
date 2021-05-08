<?php
use App\Join_event;
use Illuminate\Database\Seeder;

class Join_eventTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(Join_event::class,10)->create();
    }
}
