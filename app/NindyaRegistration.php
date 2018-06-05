<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NindyaRegistration extends Model
{
    //
    protected $table = "nindyaRegistrations";
    protected $fillable =['nim', 'generationID', 'name', 'gender', 'majorID',
                        'cityID', 'birthDate', 'phoneNumber', 'lineID',
                        'email', 'lastGPA', 'address', 'organizationalExperience',
                        'achievment', 'password','phase'];

    public static function saveNindyaRegistration($generation,$nim,$fullName,$gender,
    $major,$birthLocation,$birthDate,$phoneNumber,
$lineID,$email,$lastGPA,$address,$organizationalExperience,
$achievment,$password){
    
    $nimOutput = NindyaRegistration::firstOrCreate([
                 'nim' => $nim
                ],[
                    'name' => $fullName,
                    'email' => $email,
                    'password' => $password,
                    'generationID' => $generation,
                    'gender' => $gender,
                    'majorID' => $major,
                    'cityID' => $birthLocation,
                    'birthDate' => $birthDate,
                    'phoneNumber' => $phoneNumber,
                    'lineID' => $lineID,
                    'lastGPA' => $lastGPA,
                    'address' => $address,
                    'organizationalExperience' => $organizationalExperience,
                    'achievment' => $achievment,
                    'phase' => 'registered'
                ]);
                
           
                if($nimOutput->wasRecentlyCreated){
                    return 'Success to input '+$fullName+' data';
                }else{
                    return 'NIM '+$nim+' already exist';
                }

    }
}
