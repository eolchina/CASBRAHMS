<?php

use Illuminate\Database\Seeder;
use App\Models\Herbarium

class HerbariaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $herbaria = factory(Herbarium::class)->times(30)->make();
        Herbarium::insert($herbaria->toArray());
    }
}
