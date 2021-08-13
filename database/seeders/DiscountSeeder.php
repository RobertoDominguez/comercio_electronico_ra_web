<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('discounts')->insert(
            [
                [
                    'name'=>'ninguno',
                    'percent'=>0
                ],
                [
                    'name'=>'50%',
                    'percent'=>0.5
                ],
            ]

        );
    }
}
