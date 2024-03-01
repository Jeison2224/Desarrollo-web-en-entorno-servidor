<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    public function director()
    {
        return $this->belongsTo('App\Models\Director');
    }
    public function leadActor()
    {
        return $this->belongsTo('App\Models\LeadActor');
    }

    public function writers()
    {
        return $this->hasMany('App\Models\Writer');
    }

    public function genre()
    {
        return $this->belongsTo('App\Models\Genre');
    }
}
