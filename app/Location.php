<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    //

    protected $table="locations";

    public static function getAllLocation(){
        $results = Location::all();
        return $results;
    }
}
