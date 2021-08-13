<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('administrators')->insert(
            [
                [
                    'name' => 'Roberto Dominguez',
                    'password' => Hash::make('123123123'),
                    'email' => 'roberto@gmail.com',
                ],
            ]

        );
    }
}
