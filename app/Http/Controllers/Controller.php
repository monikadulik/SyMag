<?php

namespace App\Http\Controllers;

use App\Contractor;
use App\Warehouse;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function reports(){

        $warehouses = Warehouse::query()
            ->select('id', 'nazwa')
            ->get();

        $valuable_contractors = DB::select('select id_kontrahenta, sum(wartosc_zamowienia) from orders group by id_kontrahenta order by 2 desc limit 2;');
        $best_val_contractors[0] = Contractor::find($valuable_contractors[0]->id_kontrahenta)->id;
        $best_val_contractors[1] = Contractor::find($valuable_contractors[1]->id_kontrahenta)->id;

        $avg = DB::select('select round(avg(count),2) as avg from (select count(*) as count from order_items group by id_zamowienia) as counts;');
        $avg=$avg[0]->avg;

        $delivery = DB::select('select count(*), sposob_dostawy from orders group by sposob_dostawy order by 1 desc limit 1;');
        $delivery=$delivery[0]->sposob_dostawy;

        $common_contractors = DB::select('select count(*), id_kontrahenta from orders group by id_kontrahenta order by 1 desc limit 2;');
        $best_comm_contractors[0] = $common_contractors[0]->id_kontrahenta;
        $best_comm_contractors[1] = $common_contractors[1]->id_kontrahenta;


        return view('reports', compact('warehouses', 'best_val_contractors', 'best_values','avg','delivery','best_comm_contractors'));
    }
}
