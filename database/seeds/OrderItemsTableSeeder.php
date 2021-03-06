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
        $orderitems = new \App\OrderItem([
            'cena_jednostkowa' => '1600.00',
            'ilosc' => '1',
            'id_zamowienia' => '1',
            'id_towaru' => '21'
        ]);
        $orderitems->save();

        $orderitems = new \App\OrderItem([
            'cena_jednostkowa' => '10.00',
            'ilosc' => '2',
            'id_zamowienia' => '1',
            'id_towaru' => '13'
        ]);
        $orderitems->save();

        $orderitems = new \App\OrderItem([
            'cena_jednostkowa' => '8.23',
            'ilosc' => '1',
            'id_zamowienia' => '1',
            'id_towaru' => '7'
        ]);
        $orderitems->save();

        $orderitems = new \App\OrderItem([
            'cena_jednostkowa' => '23.85',
            'ilosc' => '1',
            'id_zamowienia' => '2',
            'id_towaru' => '20'
        ]);
        $orderitems->save();

        $orderitems = new \App\OrderItem([
            'cena_jednostkowa' => '600.00',
            'ilosc' => '1',
            'id_zamowienia' => '3',
            'id_towaru' => '12'
        ]);
        $orderitems->save();

        $orderitems = new \App\OrderItem([
            'cena_jednostkowa' => '30.00',
            'ilosc' => '2',
            'id_zamowienia' => '3',
            'id_towaru' => '19'
        ]);
        $orderitems->save();

        $orderitems = new \App\OrderItem([
            'cena_jednostkowa' => '15.9',
            'ilosc' => '1',
            'id_zamowienia' => '3',
            'id_towaru' => '5'
        ]);
        $orderitems->save();

        $orderitems = new \App\OrderItem([
            'cena_jednostkowa' => '350.75',
            'ilosc' => '2',
            'id_zamowienia' => '4',
            'id_towaru' => '18'
        ]);
        $orderitems->save();

        $orderitems = new \App\OrderItem([
            'cena_jednostkowa' => '50.00',
            'ilosc' => '2',
            'id_zamowienia' => '5',
            'id_towaru' => '3'
        ]);
        $orderitems->save();

        $orderitems = new \App\OrderItem([
            'cena_jednostkowa' => '28.5',
            'ilosc' => '1',
            'id_zamowienia' => '5',
            'id_towaru' => '8'
        ]);
        $orderitems->save();

        $orderitems = new \App\OrderItem([
            'cena_jednostkowa' => '351.1',
            'ilosc' => '1',
            'id_zamowienia' => '6',
            'id_towaru' => '18'
        ]);
        $orderitems->save();

        $orderitems = new \App\OrderItem([
            'cena_jednostkowa' => '240.85',
            'ilosc' => '1',
            'id_zamowienia' => '7',
            'id_towaru' => '9'
        ]);
        $orderitems->save();
    }
}
