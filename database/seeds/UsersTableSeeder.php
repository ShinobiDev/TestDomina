<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $user = new User;
        $user->name = "Stalin Chacon";
        $user->email = "staline.chacon@domina.com.co";
        $user->password = bcrypt('80793167');
        $user->save();
    }
}
