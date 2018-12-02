<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commodity extends Model
{
    public function warehouse(){
        return $this->belongsTo('App\Warehouse','id_magazynu');
    }
}
