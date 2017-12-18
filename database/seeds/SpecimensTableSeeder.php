<?php

use Illuminate\Database\Seeder;
use App\Models\Collection;
use App\Models\Specimen;

class SpecimensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $collection_ids = ['1', '2', '3', '4', '5'];
        $faker = app(Faker\Generator::class);
        $specimens = factory(Specimen::class)->times(100)->make()->each(function ($specimen) use ($faker, $collection_ids){
            $specimen->collection_id = $faker->randomElement($collection_ids);
        });
        Specimen::insert($specimens->toArray());
    }
}
