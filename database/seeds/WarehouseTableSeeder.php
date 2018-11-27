<?php

use Illuminate\Database\Seeder;

class WarehouseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $warehouse = new \App\Warehouse([
            'nazwa' => 'MAG_KAT_01A',
            'lokalizacja' => 'ul.Polna 7 Katowice',
            'powierzchnia' => '5000'
        ]);
        $warehouse->save();

        $warehouse = new \App\Warehouse([
            'nazwa' => 'MAG_KAT_01B',
            'lokalizacja' => 'ul.Polna 10 Katowice',
            'powierzchnia' => '2000'
        ]);
        $warehouse->save();

        $warehouse = new \App\Warehouse([
            'nazwa' => 'MAG_SOS_01A',
            'lokalizacja' => 'ul.Leśna 7 Sosnowiec',
            'powierzchnia' => '3000'
        ]);
        $warehouse->save();

        $warehouse = new \App\Warehouse([
            'nazwa' => 'MAG_ZAW_01A',
            'lokalizacja' => 'ul.Podleśna 15 Zawiercie',
            'powierzchnia' => '3500'
        ]);
        $warehouse->save();
    }
}
