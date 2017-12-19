<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use Silber\Bouncer\Database\HasRolesAndAbilities;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(User::class)->times(50)->make();
        User::insert($users->makeVisible(['password', 'remember_token'])->toArray());

        $user1 = User::find(1);
        $user1->name = 'Admin';
        $user1->email = 'admin@admin.com';
        $user1->password = bcrypt('password');
        $user1->assign('administrator');
        $user1->assign('curator');
        $user1->assign('expert');
        $user1->save();

        $user2 = User::find(2);
        $user2->name = 'Curator';
        $user2->email = 'curator@admin.com';
        $user2->password = bcrypt('password');
        $user2->assign('curator');
        $user2->save();

        $user3 = User::find(3);
        $user3->name = 'Expert';
        $user3->email = 'expert@admin.com';
        $user3->password = bcrypt('password');
        $user3->assign('expert');
        $user3->save();
    }
}
