<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = bcrypt('password');

        $user = new User();
        $user->name = 'James Wood';
        $user->email = 'woodyj888@googlemail.com';
        $user->password = $password;
        $user->remember_token = str_random(10);
        $user->save();

        $user = new User();
        $user->name = 'Jane Austin';
        $user->email = 'jane.austin@example.org';
        $user->password = $password;
        $user->remember_token = str_random(10);
        $user->save();
    }
}
