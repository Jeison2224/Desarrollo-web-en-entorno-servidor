<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    public function director() { return $this->hasOne('App\Models\Director'); }

    public function leadactor() { return $this->hasOne('App\Models\LeadActor'); }

    public function writer() {
        return $this->hasMany('App\Models\Writer' , 'movie_id');
    }

    public function genre() { return $this->belongsTo('App\Models\Genre'); }
}
