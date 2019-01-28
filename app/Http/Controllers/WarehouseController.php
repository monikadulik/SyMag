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
            ->paginate(9);

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


    public function getCommodityIssuance(){

        $warehouses = Warehouse::query()
            ->select('id', 'nazwa')
            ->get();

        return view('warehouse.issuegoods',
            compact('warehouses'));
    }
    public function postCommodityIssuance(Request $request){

        request()->validate([
            'warehouse' => 'required',
            'catalogNumber' => 'required|min:3',
            'quantity' => 'required|numeric'
        ]);


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

    public function postCommodityAcceptance(Request $request){

        request()->validate([
            'warehouse' => 'required',
            'catalogNumber' => 'required|min:3',
        ]);

        $catalog_number = $request->catalogNumber;
        $warehouse_id = $request->warehouse;

        $commodity = Commodity::query()
            ->select('id', 'id_magazynu', 'numer_katalogowy', 'nazwa', 'ilosc_na_stanie',
                'cena_jednostkowa', 'jednostka_miary', 'kod_lokalizacji')
            ->where('numer_katalogowy','=', $catalog_number)
            ->where('id_magazynu','=', $warehouse_id)
            ->first();

        if(is_null($commodity)){
            return view('warehouse.newGoods',
                compact( 'catalog_number', 'warehouse_id'));
        } else {
            return view('warehouse.addGoods',
                compact('commodity'));
        }
    }


    public function postConfirmAcceptanceNew(Request $request){

        request()->validate([
            'name' => 'required|min:3',
            'quantity' => 'required|numeric',
            'price' => 'required|numeric',
            'unit' => 'required',
        ]);

        $commodity = new Commodity;

        $commodity->id_magazynu = $request->warehouse;
        $commodity->numer_katalogowy = $request->catalogNumber;
        $commodity->nazwa = $request->name;
        $commodity->cena_jednostkowa = $request->price;
        $commodity->ilosc_na_stanie = $request->quantity;
        $commodity->jednostka_miary = $request->unit;
        $commodity->kod_lokalizacji = \App\Warehouse::find($request->warehouse)->nazwa;
        $commodity->max_ilosc = 0;
        $commodity->min_ilosc = 0;
        $commodity->czy_ostrzegac_o_nadmiarze = 0;
        $commodity->czy_ostrzegac_o_niedomiarze = 0;

        $commodity->save();

        return redirect()->route('warehouse');
    }


    public function postConfirmAcceptanceAdd(Request $request){

        request()->validate([
           'quantity' => 'required|numeric'
        ]);

        $commodity = Commodity::find($request->comm_id);

        $commodity->ilosc_na_stanie = $commodity->ilosc_na_stanie + $request->quantity;

        $commodity->save();

        return redirect()->route('warehouse');
    }
}
