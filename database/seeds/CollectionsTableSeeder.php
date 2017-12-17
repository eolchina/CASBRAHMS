<?php

use Illuminate\Database\Seeder;
use App\Models\Collection;

class CollectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $collections = factory(Collection::class)->times(50)->make();
        Collection::insert($collections->toArray());
    }
}
