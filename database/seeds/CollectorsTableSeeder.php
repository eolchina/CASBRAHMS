<?php

use Illuminate\Database\Seeder;
use App\Models\Collector;

class CollectorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $collectors = factory(Collector::class)->times(50)->make();
        Collector::insert($collectors->toArray());
    }
}
