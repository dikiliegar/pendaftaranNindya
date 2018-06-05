<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    //

    protected $table="cities";
    public static function getAllCities(){
        $results = City::all();
        return $results;
    }
}
