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

        $alerted_commodities = Commodity::query()
            ->select('id', 'numer_katalogowy', 'nazwa', 'ilosc_na_stanie', 'max_ilosc', 'min_ilosc',
                'czy_ostrzegac_o_nadmiarze', 'czy_ostrzegac_o_niedomiarze', 'kod_lokalizacji')
            ->orWhere('czy_ostrzegac_o_nadmiarze', '=', true)
            ->orWhere('czy_ostrzegac_o_niedomiarze', '=', true)
            ->get();

        return view('alerts.showAlerts', compact('alerted_commodities', 'cat_num'));
    }

    public function search(Request $request)
    {
        $cat_num = $request->input('cat_num');

        if($cat_num == '')
            return redirect()->route('alerts');
        else{
            $alerted_commodities = Commodity::query()
                ->select('id', 'numer_katalogowy', 'nazwa', 'ilosc_na_stanie', 'max_ilosc', 'min_ilosc',
                    'czy_ostrzegac_o_nadmiarze', 'czy_ostrzegac_o_niedomiarze', 'kod_lokalizacji')
                ->orWhere('czy_ostrzegac_o_nadmiarze', '=', true)
                ->orWhere('czy_ostrzegac_o_niedomiarze', '=', true)
                ->get();

            $alerted_commodities = $alerted_commodities->where('numer_katalogowy', '=', $cat_num);

            return view('alerts.showAlerts', compact('alerted_commodities', 'cat_num'));
        }

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
            $commodity = Commodity::where('id_magazynu', '=', $ware_id)
                ->where('numer_katalogowy', '=', $cat_num)
                ->first();

            if(is_null($commodity)) return redirect()->back();

            if ($max_am != '') {
                $commodity->max_ilosc = $max_am;
                $commodity->czy_ostrzegac_o_nadmiarze = true;
            }

            if ($min_am != '') {
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

    public function delete(Request $request)
    {
        $commodity = Commodity::find($request->comm_id);

        $commodity->czy_ostrzegac_o_nadmiarze = false;
        $commodity->czy_ostrzegac_o_niedomiarze = false;
        $commodity->max_ilosc = '0';
        $commodity->min_ilosc = '0';

        $commodity->save();
        return redirect()->route('alerts');
    }

    public function getEdit(Commodity $commodity)
    {
        if (!$commodity->czy_ostrzegac_o_nadmiarze && !$commodity->czy_ostrzegac_o_niedomiarze)
            return view('alerts.wrongAlert');
        else
            return view('alerts.editAlert', compact('commodity'));
    }

    public function postEdit(Request $request)
    {

        $commodity = Commodity::find($request->comm_id);

        if ($request->alertMax == "on") {
            $commodity->czy_ostrzegac_o_nadmiarze = true;
            $commodity->max_ilosc = $request->maxAm;
        } else {
            $commodity->czy_ostrzegac_o_nadmiarze = false;
            $commodity->max_ilosc = '0';
        }

        if ($request->alertMin == "on") {
            $commodity->czy_ostrzegac_o_niedomiarze = true;
            $commodity->min_ilosc = $request->minAm;
        } else {
            $commodity->czy_ostrzegac_o_niedomiarze = false;
            $commodity->min_ilosc = '0';
        }

        $commodity->save();
        return redirect()->route('alerts');
    }
}
