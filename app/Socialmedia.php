<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Socialmedia extends Model
{
    public function shops2() {
        return $this->belongsTo('App\Shop');
    }
}
