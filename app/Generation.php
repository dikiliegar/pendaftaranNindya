<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Generation extends Model
{
    //
    protected $table="generations";

    public static function insertDummyData(){

    }

    public static function getAllGenerationbyLocationID($locationID)
    {
        $results = Generation::where('locationID','=',$locationID)->get();
        return $results;
    }
}
