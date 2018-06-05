<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use App\NindyaRegistration;
use App\City;
use App\Major;
use Carbon\Carbon;

class NindyaRegistrationController extends Controller
{
    //
    public function index(){
        $locations = Location::getAllLocation();
        $cities = City::getAllCities();
        $majors = Major::getAllMajors();
        return view('mainView.nindyaRegistration',compact('locations','cities','majors'));
    }

    public function saveNindyaRegistration(Request $request){
        $generation = $request->generation;
        $nim = $request->nim;
        $fullName = $request->fullName;
        $gender = $request->gender;
        $major = $request->major;
        $birthLocation = $request->birthLocation;
        $birthDate = Carbon::createFromFormat('d/m/Y', $request->birthDate);
        $phoneNumber = $request->phoneNumber;
        $lineID = $request->lineID;
        $email = $request->email;
        $lastGPA = $request->lastGPA;
        $address = $request->address;
        $organizationalExperience = $request->organizationalExperience;
        $achievment = $request->achievment;
        $dateFormatted=str_replace('/','',$birthDate);
        $password = bcrypt('b$Lc'.$dateFormatted);


        NindyaRegistration::saveNindyaRegistration($generation,$nim,$fullName,$gender,
                                                    $major,$birthLocation,$birthDate,$phoneNumber,
                                                $lineID,$email,$lastGPA,$address,$organizationalExperience,
                                            $achievment,$password);
    }
}
