<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    //

    protected $table="majors";
    public static function getAllMajors(){
        $result = Major::all();
        return $result;
    }
}
