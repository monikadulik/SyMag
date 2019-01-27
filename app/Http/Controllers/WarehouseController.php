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
            ->paginate(10);

        return view('warehouse.show', compact('warehouses','commodities'));
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

        return view('warehouse.search',
            compact('warehouses', 'commodities', 'ware_id', 'comm_name', 'cat_num'));
    }

    public function getCommodityAcceptance(){

        $commodities = Commodity::query()
            ->select('id', 'id_magazynu', 'numer_katalogowy', 'nazwa', 'jednostka_miary')
            ->get();

        $warehouses = Warehouse::query()
            ->select('id', 'nazwa')
            ->get();

        return view('warehouse.acceptgoods',
            compact('warehouses', 'commodities'));
    }

    public function getCommodityIssuance(){

        $warehouses = Warehouse::query()
            ->select('id', 'nazwa')
            ->get();

        return view('warehouse.issuegoods',
            compact('warehouses'));
    }
    public function postCommodityIssuance(Request $request){

        $issued_quantity = $request->quantity;

        $commodity = Commodity::query()
            ->select('id', 'id_magazynu', 'numer_katalogowy', 'nazwa', 'ilosc_na_stanie',
                'cena_jednostkowa', 'jednostka_miary', 'kod_lokalizacji')
            ->where('numer_katalogowy','=', $request->catalogNumber)
            ->where('id_magazynu','=', $request->warehouse)
            ->where('ilosc_na_stanie','>=',$issued_quantity)
            ->first();

        if( is_null($commodity) ){
            return view('warehouse.deficit');
        } else {
            return view('warehouse.confirmIssue', compact('commodity','issued_quantity'));
        }
    }


    public function postConfirmIssuance(Request $request){

        $commodity = Commodity::find($request->commodity_id);

        if($commodity->ilosc_na_stanie >= $request->issued_quantity) {
            $commodity->ilosc_na_stanie = $commodity->ilosc_na_stanie - $request->issued_quantity;
        } else {
            return view('warehouse.deficit');
        }

        $commodity->save();

        return redirect()->route('warehouse');
    }

    public function postCommodityAcceptance(Request $request){

        return view('warehouse.confaccept',
            compact('commodity'));
    }

    public function getConfirmAcceptance(){
        return;
    }

    public function postConfirmAcceptance(Request $request){
        return;
    }

}
