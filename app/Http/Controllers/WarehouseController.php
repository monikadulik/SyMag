<?php

namespace App\Http\Controllers;

use App\Commodity;
use App\Warehouse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Compound;

class WarehouseController extends Controller
{
    public function home(){

        $warehouses = Warehouse::query()
            ->select('id', 'nazwa')
            ->get();
        $commodities = Commodity::query()
            ->select('numer_katalogowy', 'nazwa', 'cena_jednostkowa', 'ilosc_na_stanie', 'jednostka_miary', 'kod_lokalizacji', 'id_magazynu')
            ->get();

        return view('warehouse', compact('warehouses'), compact('commodities'));
    }

    public function getFilteredCommodities(Request $request){

        $warehouses = Warehouse::query()
            ->select('id', 'nazwa')
            ->get();

        $comm_name = $request->input('comm-name');
        $cat_num = $request->input('catalog-num');
        $ware_id = $request->input('warehouse');

        $commodities = DB::table('commodities')
            ->when($comm_name, function ($query, $comm_name){
                return $query->where('nazwa','=',$comm_name);
            })
            ->when($cat_num, function ($query, $cat_num){
                return $query->where('numer_katalogowy','=',$cat_num);
            })
            ->when($ware_id, function ($query, $ware_id){
                return $query->where('id_magazynu','=',$ware_id);
            })
            ->get();

        return view('warehouseSearch',
            compact('warehouses', 'commodities', 'ware_id', 'comm_name', 'cat_num')
        )->with($comm_name, 'comm_name');
    }
}
