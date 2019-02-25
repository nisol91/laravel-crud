<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mountain extends Model
{
    public $timestamps = false;


    protected $fillable = ['name', 'nation', 'elevation'];
    //mi dice che colonne del DB deve cercare di riempire il fill()

    //devo metterla protected perche laravel ha gia una sua variabile con lo stesso nome che e' protected,
    //e se non la metto protected non avrei il permesso di sovrascriverla
}
