<?php

use Illuminate\Database\Seeder;

class CommodityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $commodity = new \App\Commodity([
            'id_magazynu' => '1',
            'numer_katalogowy' => 'B_01XC_AD4_002_C1',
            'nazwa' => 'kalka maszynowa',
            'cena_jednostkowa' => '0.5',
            'ilosc_na_stanie' => '5',
            'jednostka_miary' => 'SZTUKI',
            'max_ilosc' => 0,
            'min_ilosc' => 0,
            'data_przyjęcia' => '2018-11-30',
            'czy_ostrzegac_o_nadmiarze' => false,
            'czy_ostrzegac_o_niedomiarze' => false,
            'kod_lokalizacji' => 'MAG_KAT_01A'
        ]);
        $commodity->save();

        $commodity = new \App\Commodity([
            'id_magazynu' => '2',
            'numer_katalogowy' => 'B_01XC_AD4_002_C1',
            'nazwa' => 'kalka maszynowa',
            'cena_jednostkowa' => '0.5',
            'ilosc_na_stanie' => '47',
            'jednostka_miary' => 'SZTUKI',
            'max_ilosc' => 0,
            'min_ilosc' => 0,
            'data_przyjęcia' => '2019-01-04',
            'czy_ostrzegac_o_nadmiarze' => false,
            'czy_ostrzegac_o_niedomiarze' => false,
            'kod_lokalizacji' => 'MAG_KAT_01B'
        ]);
        $commodity->save();

        $commodity = new \App\Commodity([
            'id_magazynu' => '1',
            'numer_katalogowy' => 'B_01BC_AD4_002_C1',
            'nazwa' => 'papier samokopiujący',
            'cena_jednostkowa' => '0.3',
            'ilosc_na_stanie' => '5',
            'jednostka_miary' => 'SZTUKI',
            'max_ilosc' => 0,
            'min_ilosc' => 0,
            'data_przyjęcia' => '2018-11-30',
            'czy_ostrzegac_o_nadmiarze' => false,
            'czy_ostrzegac_o_niedomiarze' => false,
            'kod_lokalizacji' => 'MAG_KAT_01A'
        ]);
        $commodity->save();

        $commodity = new \App\Commodity([
            'id_magazynu' => '1',
            'numer_katalogowy' => 'B_12XC_AD4_002_C1',
            'nazwa' => 'matryca powielaczowa',
            'cena_jednostkowa' => '57.20',
            'ilosc_na_stanie' => '5',
            'jednostka_miary' => 'SZTUKI',
            'max_ilosc' => 0,
            'min_ilosc' => 0,
            'data_przyjęcia' => '2018-11-30',
            'czy_ostrzegac_o_nadmiarze' => false,
            'czy_ostrzegac_o_niedomiarze' => false,
            'kod_lokalizacji' => 'MAG_KAT_01A'
        ]);
        $commodity->save();

        $commodity = new \App\Commodity([
            'id_magazynu' => '1',
            'numer_katalogowy' => 'B_AHD7_AD4_002_C1',
            'nazwa' => 'papier samoprzylepny',
            'cena_jednostkowa' => '13.5',
            'ilosc_na_stanie' => '5',
            'jednostka_miary' => 'SZTUKI',
            'max_ilosc' => 0,
            'min_ilosc' => 0,
            'data_przyjęcia' => '2018-11-30',
            'czy_ostrzegac_o_nadmiarze' => false,
            'czy_ostrzegac_o_niedomiarze' => false,
            'kod_lokalizacji' => 'MAG_KAT_01A'
        ]);
        $commodity->save();

        $commodity = new \App\Commodity([
            'id_magazynu' => '2',
            'numer_katalogowy' => 'B_AHD7_A94_002_C1',
            'nazwa' => 'papier samoprzylepny',
            'cena_jednostkowa' => '13.5',
            'ilosc_na_stanie' => '5',
            'jednostka_miary' => 'SZTUKI',
            'max_ilosc' => 0,
            'min_ilosc' => 0,
            'data_przyjęcia' => '2018-11-30',
            'czy_ostrzegac_o_nadmiarze' => false,
            'czy_ostrzegac_o_niedomiarze' => false,
            'kod_lokalizacji' => 'MAG_KAT_01B'
        ]);
        $commodity->save();

        $commodity = new \App\Commodity([
            'id_magazynu' => '2',
            'numer_katalogowy' => 'B_JUD9_AD4_002_C1',
            'nazwa' => 'zestaw kart pocztowych',
            'cena_jednostkowa' => '5.4',
            'ilosc_na_stanie' => '5',
            'jednostka_miary' => 'SZTUKI',
            'max_ilosc' => 0,
            'min_ilosc' => 0,
            'data_przyjęcia' => '2018-11-30',
            'czy_ostrzegac_o_nadmiarze' => false,
            'czy_ostrzegac_o_niedomiarze' => false,
            'kod_lokalizacji' => 'MAG_KAT_01B'
        ]);
        $commodity->save();

        $commodity = new \App\Commodity([
            'id_magazynu' => '2',
            'numer_katalogowy' => 'B_PDA4_AD4_002_C1',
            'nazwa' => 'zestaw zeszytów',
            'cena_jednostkowa' => '12.5',
            'ilosc_na_stanie' => '5',
            'jednostka_miary' => 'SZTUKI',
            'max_ilosc' => 0,
            'min_ilosc' => 0,
            'data_przyjęcia' => '2018-11-30',
            'czy_ostrzegac_o_nadmiarze' => false,
            'czy_ostrzegac_o_niedomiarze' => false,
            'kod_lokalizacji' => 'MAG_KAT_01B'
        ]);
        $commodity->save();

        $commodity = new \App\Commodity([
            'id_magazynu' => '4',
            'numer_katalogowy' => 'B_G5RA_AD4_002_Y7',
            'nazwa' => 'kłódka',
            'cena_jednostkowa' => '27.5',
            'ilosc_na_stanie' => '5',
            'jednostka_miary' => 'SZTUKI',
            'max_ilosc' => 0,
            'min_ilosc' => 0,
            'data_przyjęcia' => '2018-11-30',
            'czy_ostrzegac_o_nadmiarze' => false,
            'czy_ostrzegac_o_niedomiarze' => false,
            'kod_lokalizacji' => 'MAG_ZAW_01A'
        ]);
        $commodity->save();

        $commodity = new \App\Commodity([
            'id_magazynu' => '4',
            'numer_katalogowy' => 'B_I8D5_AD4_002_E1',
            'nazwa' => 'grzejnik centralnego ogrzewania',
            'cena_jednostkowa' => '250.0',
            'ilosc_na_stanie' => '5',
            'jednostka_miary' => 'SZTUKI',
            'max_ilosc' => 0,
            'min_ilosc' => 0,
            'data_przyjęcia' => '2018-11-30',
            'czy_ostrzegac_o_nadmiarze' => false,
            'czy_ostrzegac_o_niedomiarze' => false,
            'kod_lokalizacji' => 'MAG_ZAW_01A'
        ]);
        $commodity->save();

        $commodity = new \App\Commodity([
            'id_magazynu' => '1',
            'numer_katalogowy' => 'B_P8TU_AD4_002_G7',
            'nazwa' => 'zestaw pudeł tekturowych',
            'cena_jednostkowa' => '5.0',
            'ilosc_na_stanie' => '5',
            'jednostka_miary' => 'SZTUKI',
            'max_ilosc' => 0,
            'min_ilosc' => 0,
            'data_przyjęcia' => '2018-11-30',
            'czy_ostrzegac_o_nadmiarze' => false,
            'czy_ostrzegac_o_niedomiarze' => false,
            'kod_lokalizacji' => 'MAG_KAT_01A'
        ]);
        $commodity->save();

        $commodity = new \App\Commodity([
            'id_magazynu' => '4',
            'numer_katalogowy' => 'B_AU74_AD4_002_D3',
            'nazwa' => 'taśma bieżnikowa',
            'cena_jednostkowa' => '130.0',
            'ilosc_na_stanie' => '5',
            'jednostka_miary' => 'SZTUKI',
            'max_ilosc' => 0,
            'min_ilosc' => 0,
            'data_przyjęcia' => '2018-11-30',
            'czy_ostrzegac_o_nadmiarze' => false,
            'czy_ostrzegac_o_niedomiarze' => false,
            'kod_lokalizacji' => 'MAG_ZAW_01A'
        ]);
        $commodity->save();

        $commodity = new \App\Commodity([
            'id_magazynu' => '4',
            'numer_katalogowy' => 'B_PO73_AD4_002_D3',
            'nazwa' => 'opona do samochodu osobowego',
            'cena_jednostkowa' => '483.0',
            'ilosc_na_stanie' => '20',
            'jednostka_miary' => 'SZTUKI',
            'max_ilosc' => 0,
            'min_ilosc' => 0,
            'data_przyjęcia' => '2018-11-30',
            'czy_ostrzegac_o_nadmiarze' => false,
            'czy_ostrzegac_o_niedomiarze' => false,
            'kod_lokalizacji' => 'MAG_ZAW_01A'
        ]);
        $commodity->save();

        $commodity = new \App\Commodity([
            'id_magazynu' => '3',
            'numer_katalogowy' => 'B_PA5R_AD4_002_C1',
            'nazwa' => 'zestaw etykiet z papieru',
            'cena_jednostkowa' => '12.7',
            'ilosc_na_stanie' => '300',
            'jednostka_miary' => 'SZTUKI',
            'max_ilosc' => 0,
            'min_ilosc' => 0,
            'data_przyjęcia' => '2018-11-30',
            'czy_ostrzegac_o_nadmiarze' => false,
            'czy_ostrzegac_o_niedomiarze' => false,
            'kod_lokalizacji' => 'MAG_SOS_01A'
        ]);
        $commodity->save();

        $commodity = new \App\Commodity([
            'id_magazynu' => '3',
            'numer_katalogowy' => 'B_PH6R_AD4_002_C1',
            'nazwa' => 'pokrycie ścienne tekstylne',
            'cena_jednostkowa' => '48.9',
            'ilosc_na_stanie' => '0',
            'jednostka_miary' => 'SZTUKI',
            'max_ilosc' => 0,
            'min_ilosc' => 0,
            'data_przyjęcia' => '2018-11-30',
            'czy_ostrzegac_o_nadmiarze' => false,
            'czy_ostrzegac_o_niedomiarze' => false,
            'kod_lokalizacji' => 'MAG_SOS_01A'
        ]);
        $commodity->save();

        $commodity = new \App\Commodity([
            'id_magazynu' => '3',
            'numer_katalogowy' => 'B_PH6A_AD4_002_K2',
            'nazwa' => 'aparat fotograiczny',
            'cena_jednostkowa' => '7000.0',
            'ilosc_na_stanie' => '3',
            'jednostka_miary' => 'SZTUKI',
            'max_ilosc' => 0,
            'min_ilosc' => 0,
            'data_przyjęcia' => '2018-11-30',
            'czy_ostrzegac_o_nadmiarze' => false,
            'czy_ostrzegac_o_niedomiarze' => false,
            'kod_lokalizacji' => 'MAG_SOS_01A'
        ]);
        $commodity->save();

        $commodity = new \App\Commodity([
            'id_magazynu' => '3',
            'numer_katalogowy' => 'B_PC6R_AD4_002_K8',
            'nazwa' => 'termostat',
            'cena_jednostkowa' => '30.0',
            'ilosc_na_stanie' => '1',
            'jednostka_miary' => 'SZTUKI',
            'max_ilosc' => 0,
            'min_ilosc' => 0,
            'data_przyjęcia' => '2018-11-30',
            'czy_ostrzegac_o_nadmiarze' => false,
            'czy_ostrzegac_o_niedomiarze' => false,
            'kod_lokalizacji' => 'MAG_SOS_01A'
        ]);
        $commodity->save();

        $commodity = new \App\Commodity([
            'id_magazynu' => '3',
            'numer_katalogowy' => 'B_PH6L_AD4_002_K2',
            'nazwa' => 'kamera wideo',
            'cena_jednostkowa' => '12000.0',
            'ilosc_na_stanie' => '75',
            'jednostka_miary' => 'SZTUKI',
            'max_ilosc' => 0,
            'min_ilosc' => 0,
            'data_przyjęcia' => '2018-11-30',
            'czy_ostrzegac_o_nadmiarze' => false,
            'czy_ostrzegac_o_niedomiarze' => false,
            'kod_lokalizacji' => 'MAG_SOS_01A'
        ]);
        $commodity->save();

        $commodity = new \App\Commodity([
            'id_magazynu' => '3',
            'numer_katalogowy' => 'B_PG6R_AD4_002_K2',
            'nazwa' => 'odbiornik radiowy',
            'cena_jednostkowa' => '320.0',
            'ilosc_na_stanie' => '45',
            'jednostka_miary' => 'SZTUKI',
            'max_ilosc' => 0,
            'min_ilosc' => 0,
            'data_przyjęcia' => '2018-11-30',
            'czy_ostrzegac_o_nadmiarze' => false,
            'czy_ostrzegac_o_niedomiarze' => false,
            'kod_lokalizacji' => 'MAG_SOS_01A'
        ]);
        $commodity->save();

        $commodity = new \App\Commodity([
            'id_magazynu' => '3',
            'numer_katalogowy' => 'B_AB6R_AD4_002_K9',
            'nazwa' => 'obwody drukowane zmontowane',
            'cena_jednostkowa' => '30.0',
            'ilosc_na_stanie' => '4',
            'jednostka_miary' => 'SZTUKI',
            'max_ilosc' => 0,
            'min_ilosc' => 0,
            'data_przyjęcia' => '2018-11-30',
            'czy_ostrzegac_o_nadmiarze' => false,
            'czy_ostrzegac_o_niedomiarze' => false,
            'kod_lokalizacji' => 'MAG_SOS_01A'
        ]);
        $commodity->save();

        $commodity = new \App\Commodity([
            'id_magazynu' => '3',
            'numer_katalogowy' => 'B_PHAD_AD4_002_K9',
            'nazwa' => 'elektroniczne układy scalone',
            'cena_jednostkowa' => '20.0',
            'ilosc_na_stanie' => '15',
            'jednostka_miary' => 'SZTUKI',
            'max_ilosc' => 0,
            'min_ilosc' => 0,
            'data_przyjęcia' => '2018-11-30',
            'czy_ostrzegac_o_nadmiarze' => false,
            'czy_ostrzegac_o_niedomiarze' => false,
            'kod_lokalizacji' => 'MAG_SOS_01A'
        ]);
        $commodity->save();

        $commodity = new \App\Commodity([
            'id_magazynu' => '3',
            'numer_katalogowy' => 'B_CHUR_AD4_002_C1',
            'nazwa' => 'piec kuchenny',
            'cena_jednostkowa' => '2700.0',
            'ilosc_na_stanie' => '35',
            'jednostka_miary' => 'SZTUKI',
            'max_ilosc' => 0,
            'min_ilosc' => 0,
            'data_przyjęcia' => '2018-11-30',
            'czy_ostrzegac_o_nadmiarze' => false,
            'czy_ostrzegac_o_niedomiarze' => false,
            'kod_lokalizacji' => 'MAG_SOS_01A'
        ]);
        $commodity->save();

        $commodity = new \App\Commodity([
            'id_magazynu' => '3',
            'numer_katalogowy' => 'B_PO6R_AD4_002_C1',
            'nazwa' => 'materac',
            'cena_jednostkowa' => '480.0',
            'ilosc_na_stanie' => '23',
            'jednostka_miary' => 'SZTUKI',
            'max_ilosc' => 0,
            'min_ilosc' => 0,
            'data_przyjęcia' => '2018-11-30',
            'czy_ostrzegac_o_nadmiarze' => false,
            'czy_ostrzegac_o_niedomiarze' => false,
            'kod_lokalizacji' => 'MAG_SOS_01A'
        ]);
        $commodity->save();



    }
}
