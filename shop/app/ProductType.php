<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    protected $table = "type_products"; // khai báo bản

    public function product(){ // qua hệgiuawxa các bản
    	return $this->hasMany('App\Product','id_type','id');// đường dẫn,khóa ngoại bảng ProductType, id bảng Product
    }
}
