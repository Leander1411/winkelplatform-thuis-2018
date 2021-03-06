<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function shops() {
        return $this->belongsTo('App\Shop');
    }
}
