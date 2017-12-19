<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bouncer::allow('administrator')->to('users_manage');
        Bouncer::allow('curator')->to('herbariums_manage');
        Bouncer::allow('expert')->to('data_manage');

    }
}
