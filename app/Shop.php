<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use App\Product;

class Shop extends Model
{
    public function product() {
        //$products = Product::all();
        //return $this->hasMany('App\Product', 'id', 'product_id');
        return $this->hasMany('App\Product');
        // return $this->hasMany('App\Product', 'product_shop', 'product_id', 'id');
    }

    public function socialmedia() {
        return $this->hasMany('App\Socialmedia');
    }
}
