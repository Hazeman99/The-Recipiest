<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $guarded = ['id'];

    public function user(){
        $this->belongsTo('App\User');
    }
}
