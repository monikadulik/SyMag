<?php

use Illuminate\Database\Seeder;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $order = new \App\Order([
            'id_kontrahenta' => '5',
            'wartosc_zamowienia' => '1628.23',
            'data_zamowienia' => '2018-05-12',
            'status_realizacji' => 'OCZEKIWANIE NA PŁATNOŚĆ'
        ]);
        $order->save(); //1


        $order = new \App\Order([
            'id_kontrahenta' => '2',
            'wartosc_zamowienia' => '23.85',
            'data_zamowienia' => '2018-11-01',
            'status_realizacji' => 'OCZEKIWANIE NA PŁATNOŚĆ'
        ]);
        $order->save(); //2


        $order = new \App\Order([
            'id_kontrahenta' => '3',
            'wartosc_zamowienia' => '675.90',
            'data_zamowienia' => '2018-10-12',
            'status_realizacji' => 'W REALIZACJI'
        ]);
        $order->save(); //3


        $order = new \App\Order([
            'id_kontrahenta' => '1',
            'wartosc_zamowienia' => '701.50',
            'data_zamowienia' => '2018-11-25',
            'status_realizacji' => 'W REALIZACJI'
        ]);
        $order->save(); //4

        $order = new \App\Order([
            'id_kontrahenta' => '1',
            'wartosc_zamowienia' => '128.50',
            'data_zamowienia' => '2018-11-18',
            'status_realizacji' => 'CZEKA NA WYDANIE'
        ]);
        $order->save(); //5

        $order = new \App\Order([
            'id_kontrahenta' => '3',
            'wartosc_zamowienia' => '351.10',
            'data_zamowienia' => '2018-10-07',
            'status_realizacji' => 'WYDANO'
        ]);
        $order->save(); //6
    }
}
