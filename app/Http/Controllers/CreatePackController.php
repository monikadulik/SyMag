<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CreatePackController extends Controller
{
    public function showAwaitingPayment(){
        $orders = Order::query()
            ->select('id', 'id_kontrahenta', 'data_zamowienia', 'wartosc_zamowienia','status_realizacji' )
            ->where('status_realizacji','=','OCZEKIWANIE NA PŁATNOŚĆ')
            ->orderBy('data_zamowienia')
            ->get();
        return view('orders.awaitingPayment', compact('orders'));
    }

    public function showInProgress(){
        $orders = Order::query()
            ->select('id', 'id_kontrahenta', 'data_zamowienia', 'wartosc_zamowienia','status_realizacji' )
            ->where('status_realizacji','=','W REALIZACJI')
            ->orderBy('data_zamowienia')
            ->get();
        return view('orders.inProgress', compact('orders'));
    }

    public function showAwaitingIssue(){
        $orders = Order::query()
            ->select('id', 'id_kontrahenta', 'data_zamowienia', 'wartosc_zamowienia','status_realizacji' )
            ->where('status_realizacji','=','CZEKA NA WYDANIE')
            ->orderBy('data_zamowienia')
            ->get();
        return view('orders.awaitingIssue', compact('orders'));
    }

    public function showIssued(){
        $orders = Order::query()
            ->select('id', 'id_kontrahenta', 'data_zamowienia', 'wartosc_zamowienia','status_realizacji' )
            ->where('status_realizacji','=','WYDANO')
            ->orderBy('data_zamowienia')
            ->get();
        return view('orders.issued', compact('orders'));
    }

    public function createPackage(Request $request){

        $order_id = $request->input('id');
        $order = Order::find($order_id);

//        $order_items = Order::find($order_id)->orderItems;
        $order_items = DB::table('order_items')
            ->join('commodities', 'order_items.id_towaru', '=', 'commodities.id')
            ->where('order_items.id_zamowienia','=',$order_id)
            ->get();
        $contractor = Order::find($order_id)->contractor;
        return view('createPackage', compact('order', 'contractor', 'order_items'));
    }

//    public function showPackage($id){
//        $order = Order::find($id);
//
//        $order_items = DB::table('order_items')
//            ->join('commodities', 'order_items.id_towaru', '=', 'commodities.id')
//            ->where('order_items.id_zamowienia','=', $id)
//            ->get();
//
//        $contractor = Order::find($id)->contractor;
//        return view('createPackage', compact('order', 'contractor', 'order_items'));
//    }
}
