<?php

use Illuminate\Database\Seeder;
use Silber\Bouncer\Database;

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
    }
}
