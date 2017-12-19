<?php

use Illuminate\Database\Seeder;
use App\Models\Herbarium;

class HerbariumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $herbariums = factory(Herbarium::class)->times(30)->make();
        Herbarium::insert($herbariums->toArray());
    }
}
