<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    public function contact() {
        return $this->hasOne('App\Models\Contact');
    }

    public function product() {
        return $this->hasMany('App\Models\Product');
    }

    public function order() {
        return $this->belongsTo('App\Models\Order');
    }

}
