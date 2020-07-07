<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        'name'  => 'Nathaly Amaya',
        'email'     => 'admin@gmail.com',
        'password'  => bcrypt('12345678'),
        ]);
    }
}
