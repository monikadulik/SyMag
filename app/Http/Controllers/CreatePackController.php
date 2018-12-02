<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Illuminate\Session\Store;

class CreatePackController extends Controller
{
    public function showAwaitingPayment(){
        $orders = Order::query()
            ->select('data_zamowienia', 'wartosc_zamowienia','status_realizacji' )
            ->where('status_realizacji','=','OCZEKIWANIE NA PŁATNOŚĆ')
            ->orderBy('data_zamowienia')
            ->get();
        return view('orders.awaitingPayment', compact('orders'));
    }

    public function showInProgress(){
        $orders = Order::query()
            ->select('data_zamowienia', 'wartosc_zamowienia','status_realizacji' )
            ->where('status_realizacji','=','W REALIZACJI')
            ->orderBy('data_zamowienia')
            ->get();
        return view('orders.inProgress', compact('orders'));
    }

    public function showAwaitingIssue(){
        $orders = Order::query()
            ->select('data_zamowienia', 'wartosc_zamowienia','status_realizacji' )
            ->where('status_realizacji','=','CZEKA NA WYDANIE')
            ->orderBy('data_zamowienia')
            ->get();
        return view('orders.awaitingIssue', compact('orders'));
    }

    public function showIssued(){
        $orders = Order::query()
            ->select('data_zamowienia', 'wartosc_zamowienia','status_realizacji' )
            ->where('status_realizacji','=','WYDANO')
            ->orderBy('data_zamowienia')
            ->get();
        return view('orders.issued', compact('orders'));
    }

    public function createPackage(Request $request){
        $order = $request->session()->all();
        return view('createPackage', compact('order'));
    }

}
