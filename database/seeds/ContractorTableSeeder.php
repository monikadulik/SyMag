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
            'adres1' => 'ul. Dzikiej Róży 28',
            'adres2' => '11-111 Kraków',
            'adres_email' => 'zakupy@polmag.com.pl',
            'telefon' => '213-462-732',
            'NIP' => '5662656587',
            'konto' => '75249000058772891013064421'
        ]);
        $contractor->save();

        $contractor = new \App\Contractor([
            'nazwa' => 'Vari-Tec',
            'adres1' => 'ul. Byszew 121',
            'adres2' => '22-222 Byszew',
            'adres_email' => 'zakupy@varitec.com.pl',
            'telefon' => '753-532-754',
            'NIP' => '1246290430',
            'konto' => '17249000052243756603553817'
        ]);
        $contractor->save();

        $contractor = new \App\Contractor([
            'nazwa' => 'Excella',
            'adres1' => 'Al. Marszałka Piłsudskiego Józefa 108',
            'adres2' => '33-333 Olsztyn',
            'adres_email' => 'zakupy@excella.com.pl',
            'telefon' => '523-754-765',
            'NIP' => '7766765440',
            'konto' => '59105000021858258605049445'
        ]);
        $contractor->save();

        $contractor = new \App\Contractor([
            'nazwa' => 'Town and Country Convenience Stores',
            'adres1' => 'ul. Wiankowa 18',
            'adres2' => '44-444 Szczecin',
            'adres_email' => 'zakupy@taccs.com.pl',
            'telefon' => '865-123-967',
            'NIP' => '3759260435',
            'konto' => '64249000057027870712376598'
        ]);
        $contractor->save();

        $contractor = new \App\Contractor([
            'nazwa' => 'Omni Tech',
            'adres1' => 'ul. Kolumny 102',
            'adres2' => '55-555 Łódź',
            'adres_email' => 'zakupy@omnitech.com.pl',
            'telefon' => '123-745-123',
            'NIP' => '3931260673',
            'konto' => '72249000050314035304227419'
        ]);
        $contractor->save();
    }
}
