<?php

use Illuminate\Database\Seeder;

class ContractorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $contractor = new \App\Contractor([
            'nazwa' => 'Polmag Sp. z o.o.',
            'adres' => 'ul. Dzikiej Róży 28 Kraków',
            'NIP' => '5662656587',
            'konto' => '75249000058772891013064421'
        ]);
        $contractor->save();

        $contractor = new \App\Contractor([
            'nazwa' => 'Vari-Tec',
            'adres' => 'ul. Byszew 121 Byszew',
            'NIP' => '1246290430',
            'konto' => '17249000052243756603553817'
        ]);
        $contractor->save();

        $contractor = new \App\Contractor([
            'nazwa' => 'Excella',
            'adres' => 'Al. Marszałka Piłsudskiego Józefa 108 Olsztyn',
            'NIP' => '7766765440',
            'konto' => '59105000021858258605049445'
        ]);
        $contractor->save();

        $contractor = new \App\Contractor([
            'nazwa' => 'Town and Country Convenience Stores',
            'adres' => 'ul. Wiankowa 18 Szczecin',
            'NIP' => '3759260435',
            'konto' => '64249000057027870712376598'
        ]);
        $contractor->save();

        $contractor = new \App\Contractor([
            'nazwa' => 'Omni Tech',
            'adres' => 'ul. Kolumny 102 Łódź',
            'NIP' => '3931260673',
            'konto' => '72249000050314035304227419'
        ]);
        $contractor->save();
    }
}
