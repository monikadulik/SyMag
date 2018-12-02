<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    public function commodities(){
        return $this->hasMany('App\Commodity','id_magazynu');
    }
}
