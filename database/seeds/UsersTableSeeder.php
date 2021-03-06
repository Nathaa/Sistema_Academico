<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'  => 'Nathaly Amaya',
            'email'     => 'admin@gmail.com',
            'password'  => bcrypt('12345678'),
            ]);
    }
}
