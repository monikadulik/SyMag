<?php

use Illuminate\Database\Seeder;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employee = new \App\Employee([
            'kod_pracownika' => 'MAG',
            'imie' => 'Alf',
            'nazwisko' => 'Szafraniec'
        ]);
        $employee->save();

        $employee = new \App\Employee([
            'kod_pracownika' => 'MAG',
            'imie' => 'Tworzymir',
            'nazwisko' => 'Wojtaszek'
        ]);
        $employee->save();

        $employee = new \App\Employee([
            'kod_pracownika' => 'MAG',
            'imie' => 'Prudencjusz',
            'nazwisko' => 'Gancarz'
        ]);
        $employee->save();

        $employee = new \App\Employee([
            'kod_pracownika' => 'MAG',
            'imie' => 'Walery',
            'nazwisko' => 'Kuczera'
        ]);
        $employee->save();

        $employee = new \App\Employee([
            'kod_pracownika' => 'MAG',
            'imie' => 'Martyn',
            'nazwisko' => 'Tokarczyk'
        ]);
        $employee->save();

        $employee = new \App\Employee([
            'kod_pracownika' => 'MAG',
            'imie' => 'Erhard',
            'nazwisko' => 'Kufel'
        ]);
        $employee->save();

        $employee = new \App\Employee([
            'kod_pracownika' => 'MAG',
            'imie' => 'Patrycy',
            'nazwisko' => 'Jeziorski'
        ]);
        $employee->save();

        $employee = new \App\Employee([
            'kod_pracownika' => 'KIER',
            'imie' => 'Tycjan',
            'nazwisko' => 'Maciejewski'
        ]);
        $employee->save();

        $employee = new \App\Employee([
            'kod_pracownika' => 'KIER',
            'imie' => 'Grzegorz',
            'nazwisko' => 'Szczygieł'
        ]);
        $employee->save();

        $employee = new \App\Employee([
            'kod_pracownika' => 'KS',
            'imie' => 'Gawryła',
            'nazwisko' => 'Maciejewska'
        ]);
        $employee->save();

        $employee = new \App\Employee([
            'kod_pracownika' => 'OBS',
            'imie' => 'Izolda',
            'nazwisko' => 'Błońska'
        ]);
        $employee->save();

        $employee = new \App\Employee([
            'kod_pracownika' => 'OBS',
            'imie' => 'Mariola',
            'nazwisko' => 'Gacek'
        ]);
        $employee->save();

        $employee = new \App\Employee([
            'kod_pracownika' => 'SZFZ',
            'imie' => 'Abdon',
            'nazwisko' => 'Wajda'
        ]);
        $employee->save();

        $employee = new \App\Employee([
            'kod_pracownika' => 'SZFZ',
            'imie' => 'Prot',
            'nazwisko' => 'Czerski'
        ]);
        $employee->save();
    }
}
