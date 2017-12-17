<?php

use Illuminate\Database\Seeder;

class CollectorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $collectors = factory(Collectors::class)->times(50)->make();
        Collector::insert($collectors->toArray());
    }
}
