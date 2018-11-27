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
            'wartosc_zamowienia' => '1628.23',
            'data_zamowienia' => '2018-05-12',
            'status_realizacji' => 'OCZEKIWANIE NA PŁATNOŚĆ'
        ]);
        $order->save();


        $order = new \App\Order([
            'wartosc_zamowienia' => '23.85',
            'data_zamowienia' => '2018-11-01',
            'status_realizacji' => 'OCZEKIWANIE NA PŁATNOŚĆ'
        ]);
        $order->save();


        $order = new \App\Order([
            'wartosc_zamowienia' => '675.90',
            'data_zamowienia' => '2018-10-12',
            'status_realizacji' => 'W REALIZACJI'
        ]);
        $order->save();


        $order = new \App\Order([
            'wartosc_zamowienia' => '701.50',
            'data_zamowienia' => '2018-11-25',
            'status_realizacji' => 'W REALIZACJI'
        ]);
        $order->save();

        $order = new \App\Order([
            'wartosc_zamowienia' => '34.98',
            'data_zamowienia' => '2018-10-14',
            'status_realizacji' => 'CZEKA NA WYDANIE'
        ]);
        $order->save();


        $order = new \App\Order([
            'wartosc_zamowienia' => '128.50',
            'data_zamowienia' => '2018-11-18',
            'status_realizacji' => 'CZEKA NA WYDANIE'
        ]);
        $order->save();


        $order = new \App\Order([
            'wartosc_zamowienia' => '459.90',
            'data_zamowienia' => '2018-11-03',
            'status_realizacji' => 'WYDANO'
        ]);
        $order->save();


        $order = new \App\Order([
            'wartosc_zamowienia' => '351.10',
            'data_zamowienia' => '2018-10-07',
            'status_realizacji' => 'WYDANO'
        ]);
        $order->save();


        $order = new \App\Order([
            'wartosc_zamowienia' => '240.85',
            'data_zamowienia' => '2018-09-12',
            'status_realizacji' => 'DOSTARCZONO'
        ]);
        $order->save();


        $order = new \App\Order([
            'wartosc_zamowienia' => '55.80',
            'data_zamowienia' => '2018-09-17',
            'status_realizacji' => 'DOSTARCZONO'
        ]);
        $order->save();


        $order = new \App\Order([
            'wartosc_zamowienia' => '50.90',
            'data_zamowienia' => '2018-10-20',
            'status_realizacji' => 'DOSTARCZONO'
        ]);
        $order->save();
    }
}
