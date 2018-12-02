<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function orderItems(){
        return $this->hasMany('App\OrderItem','id_zamowienia');
    }

    public function contractor(){
        return $this->belongsTo('App\Contractor', 'id_kontrahenta');
    }
}
