<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->email= 'maria@gmail.com';
        $user->password= Hash::make('1234');
        $user->save();

        $user = new User();
        $user->email= 'akhi@gmail.com';
        $user->password= Hash::make('1234');
        $user->save();

    }
}
