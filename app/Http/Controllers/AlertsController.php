<?php

namespace App\Http\Controllers;

use App\Commodity;
use App\Warehouse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlertsController extends Controller
{
    public function show()
    {
        $cat_num = '';

        $alerts = Commodity::query()
            ->select('numer_katalogowy', 'nazwa', 'ilosc_na_stanie', 'max_ilosc', 'min_ilosc',
                'czy_ostrzegac_o_nadmiarze', 'czy_ostrzegac_o_niedomiarze', 'kod_lokalizacji')
            ->where('czy_ostrzegac_o_nadmiarze', '=', true)
            ->orWhere('czy_ostrzegac_o_niedomiarze', '=', true)
            ->get();

        return view('alerts.showAlerts', compact('alerts', 'cat_num'));
    }

    public function search(Request $request)
    {
        $cat_num = $request->input('cat_num');

        $alerts = Commodity::query()
            ->select('numer_katalogowy', 'nazwa', 'ilosc_na_stanie', 'max_ilosc', 'min_ilosc','czy_ostrzegac_o_nadmiarze', 'czy_ostrzegac_o_niedomiarze', 'kod_lokalizacji')
            ->where('numer_katalogowy','=',$cat_num)
            ->get();

        return view('alerts.showAlerts', compact('alerts','cat_num'));
    }

    public function getNew()
    {
        $warehouses = Warehouse::query()
            ->select('id', 'nazwa')
            ->get();

        return view('alerts.newAlert', compact('warehouses'));
    }

    public function postNew(Request $request)
    {
        $cat_num = $request->input('catalogNumber');
        $ware_id = $request->input('warehouse');
        $max_am = $request->input('maxAm');
        $min_am = $request->input('minAm');

        if ($ware_id != '') {
            $commodity = Commodity::where('id_magazynu', '=', $ware_id)->where('numer_katalogowy', '=', $cat_num)->first();

            if ($max_am) {
                $commodity->max_ilosc = $max_am;
                $commodity->czy_ostrzegac_o_nadmiarze = true;
            }

            if ($min_am) {
                $commodity->min_ilosc = $min_am;
                $commodity->czy_ostrzegac_o_niedomiarze = true;
            }

            $commodity->save();
        } else {

            if ($max_am != '') {
                Commodity::where('numer_katalogowy', '=', $cat_num)
                    ->update([
                        'max_ilosc' => $max_am,
                        'czy_ostrzegac_o_nadmiarze' => true
                    ]);
            }

            if ($min_am != '') {
                Commodity::where('numer_katalogowy', '=', $cat_num)
                    ->update([
                        'min_ilosc' => $min_am,
                        'czy_ostrzegac_o_niedomiarze' => true
                    ]);
            }
        }
        return redirect()->route('alerts');
    }
}
