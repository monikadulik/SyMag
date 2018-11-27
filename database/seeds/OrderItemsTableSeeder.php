<?php

use Illuminate\Database\Seeder;

class OrderItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $orderitems = new \App\OrderItems([
            'cena_jednostkowa' => '1600.00',
            'ilosc' => '1'
        ]);
        $orderitems->save(); //1

        $orderitems = new \App\OrderItems([
            'cena_jednostkowa' => '10.00',
            'ilosc' => '2'
        ]);
        $orderitems->save(); //1

        $orderitems = new \App\OrderItems([
            'cena_jednostkowa' => '8.23',
            'ilosc' => '1'
        ]);
        $orderitems->save(); //1
    }
}
