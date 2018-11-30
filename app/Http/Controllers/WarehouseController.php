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

        $warehouse_list = Warehouse::query()->pluck('nazwa');
        $commodities = Commodity::query()->select('numer_katalogowy', 'nazwa', 'cena_jednostkowa', 'jednostka_miary', 'kod_lokalizacji')
            ->get();

        return view('warehouse', compact('warehouse_list'), compact('commodities'));
    }

    public function getFilteredCommodities(Request $request){

        $warehouse_list = Warehouse::query()->pluck('nazwa');

        $comm_name = $request->input('comm-name');
        $cat_num = $request->input('catalog-num');
        $ware = $request->input('warehouse');

        $commodities = DB::table('commodities')
            ->when($comm_name, function ($query, $comm_name){
                return $query->where('nazwa','=',$comm_name);
            })
            ->when($cat_num, function ($query, $cat_num){
                return $query->where('numer_katalogowy','=',$cat_num);
            })
            ->when($ware, function ($query, $ware){
                return $query->where('kod_lokalizacji','=',$ware);
            })
            ->get();

        return view('warehouseSearch',
            compact('warehouse_list', 'commodities', 'ware', 'comm_name', 'cat_num')
        )->with($comm_name, 'comm_name');
    }
}
