<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        User::create([
            'name'     => 'Moahmed Mahmoud',
            'email'    => 'm.elrodathy@yhaoo.com',
            'password' => bcrypt('password'),
            'is_admin' => true,
        ]);
    }
}
