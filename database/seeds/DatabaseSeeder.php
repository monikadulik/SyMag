<?php

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
        $this->call(WarehouseTableSeeder::class);
        $this->call(ContractorTableSeeder::class);
        $this->call(OrderTableSeeder::class);
        $this->call(OrderItemsTableSeeder::class);
    }
}
