<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Generation;

class GenerationController extends Controller
{
    public function getGenerationbyLocationID($locationID){
        
        $generation = Generation::getAllGenerationbyLocationID($locationID);
        return json_encode($generation);
    }
}
