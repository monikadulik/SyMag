<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrdersController extends Controller
{
    public function showAwaitingPayment(){
        $orders = Order::query()
            ->select('id', 'id_kontrahenta', 'data_zamowienia', 'wartosc_zamowienia','status_realizacji' )
            ->where('status_realizacji','=','OCZEKIWANIE NA PŁATNOŚĆ')
            ->orderBy('data_zamowienia')
            ->get();
        $state = 0;
        return view('orders', compact('orders', 'state'));
    }

    public function showInProgress(){
        $orders = Order::query()
            ->select('id', 'id_kontrahenta', 'data_zamowienia', 'wartosc_zamowienia','status_realizacji' )
            ->where('status_realizacji','=','W REALIZACJI')
            ->orderBy('data_zamowienia')
            ->get();
        $state = 1;
        return view('orders', compact('orders', 'state'));
    }

    public function showAwaitingIssue(){
        $orders = Order::query()
            ->select('id', 'id_kontrahenta', 'data_zamowienia', 'wartosc_zamowienia','status_realizacji' )
            ->where('status_realizacji','=','CZEKA NA WYDANIE')
            ->orderBy('data_zamowienia')
            ->get();
        $state = 2;
        return view('orders', compact('orders', 'state'));
    }

    public function showIssued(){
        $orders = Order::query()
            ->select('id', 'id_kontrahenta', 'data_zamowienia', 'wartosc_zamowienia','status_realizacji' )
            ->where('status_realizacji','=','WYDANO')
            ->orderBy('data_zamowienia')
            ->get();
        $state = 3;
        return view('orders', compact('orders', 'state'));
    }

    public function show(Order $order)
    {
        $order_items = DB::table('order_items')
            ->join('commodities', 'order_items.id_towaru', '=', 'commodities.id')
            ->where('order_items.id_zamowienia', '=', $order->id)
            ->get();

        $contractor = Order::findOrFail($order->id)->contractor;
        return view('createPackage', compact('order', 'contractor', 'order_items'));
    }

    public function packed(Request $request){

        $order = Order::find($request->order_id);
        $order->status_realizacji = 'CZEKA NA WYDANIE';
        $order->save();

        return redirect()->route('orders');
    }

    public function pass(Request $request){

        $order = Order::find($request->order_id);
        $order->status_realizacji = 'WYDANO';
        $order->save();

        return redirect()->route('awaitingIssue');
    }
}
