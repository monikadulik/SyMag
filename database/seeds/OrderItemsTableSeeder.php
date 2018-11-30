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

        $orderitems = new \App\OrderItems([
            'cena_jednostkowa' => '23.85',
            'ilosc' => '1'
        ]);
        $orderitems->save(); //2

        $orderitems = new \App\OrderItems([
            'cena_jednostkowa' => '600.00',
            'ilosc' => '1'
        ]);
        $orderitems->save(); //3

        $orderitems = new \App\OrderItems([
            'cena_jednostkowa' => '30.00',
            'ilosc' => '2'
        ]);
        $orderitems->save(); //3

        $orderitems = new \App\OrderItems([
            'cena_jednostkowa' => '15.9',
            'ilosc' => '1'
        ]);
        $orderitems->save(); //3

        $orderitems = new \App\OrderItems([
            'cena_jednostkowa' => '350.75',
            'ilosc' => '2'
        ]);
        $orderitems->save(); //4

        $orderitems = new \App\OrderItems([
            'cena_jednostkowa' => '50.00',
            'ilosc' => '2'
        ]);
        $orderitems->save(); //5

        $orderitems = new \App\OrderItems([
            'cena_jednostkowa' => '28.5',
            'ilosc' => '1'
        ]);
        $orderitems->save(); //5

        $orderitems = new \App\OrderItems([
            'cena_jednostkowa' => '351.1',
            'ilosc' => '1'
        ]);
        $orderitems->save(); //6

        $orderitems = new \App\OrderItems([
            'cena_jednostkowa' => '240.85',
            'ilosc' => '1'
        ]);
        $orderitems->save(); //7


    }
}
