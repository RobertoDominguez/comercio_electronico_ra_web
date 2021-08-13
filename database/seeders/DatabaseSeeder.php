<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            AdministratorSeeder::class,
            BitacoraSeeder::class,
            CategorieSeeder::class,
            DeliveryCompanySeeder::class,
            DetailSeeder::class,
            DiscountSeeder::class,
            FavoriteSeeder::class,
            PaymentMethodSeeder::class,
            PaymentSeeder::class,
            ProductCategorieSeeder::class,
            SaleSeeder::class
        ]);
    }
}
