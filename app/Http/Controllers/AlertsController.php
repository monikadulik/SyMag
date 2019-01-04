<?php

namespace App\Http\Controllers;

use App\Commodity;
use App\Warehouse;
use Illuminate\Http\Request;

class AlertsController extends Controller
{
    public function show(){
        return view('alerts.showAlerts');
    }

    public function getNew(){
        $warehouses = Warehouse::query()
            ->select('id','nazwa')
            ->get();

        return view('alerts.newAlert', compact('warehouses'));
    }

    public function postNew(Request $request){
        $cat_num = $request->input('catalogNumber');
        $ware_id = $request->input('warehouse');
        $max_am = $request->input('maxAm');
        $min_am = $request->input('minAm');

        if ($ware_id != '') {
            $commodity = Commodity::where('id_magazynu','=',$ware_id)->where('numer_katalogowy','=',$cat_num)->first();

            if($max_am){
                $commodity->max_ilosc = $max_am;
                $commodity->czy_ostrzegac_o_nadmiarze = true;
            }

            if($min_am){
                $commodity->min_ilosc = $min_am;
                $commodity->czy_ostrzegac_o_niedomiarze = true;
            }

            $commodity->save();
        } else {

            if($max_am != ''){
                Commodity::where('numer_katalogowy','=',$cat_num)
                    ->update([
                        'max_ilosc' => $max_am,
                        'czy_ostrzegac_o_nadmiarze' => true
                    ]);
            }

            if($min_am != ''){
                Commodity::where('numer_katalogowy','=',$cat_num)
                    ->update([
                        'min_ilosc' => $min_am,
                        'czy_ostrzegac_o_niedomiarze' => true
                    ]);
            }
        }
        return view('alerts.showAlerts');
    }
}
