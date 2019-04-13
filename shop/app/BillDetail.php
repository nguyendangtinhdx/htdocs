<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
    protected $table = "bill_detail";

    public function product(){
    	return $this->belongTo('App/Prodcut','id_product','id');
    }

    public function bill(){
    	return $this->belongTo('App/Bill','id_bill','id');
    }
}
