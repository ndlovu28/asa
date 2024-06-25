<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Athlete extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_number', 
        'passport_number', 
        'passport_date_of_issue', 
        'passport_expiry_date',
        'first_name', 
        'other_names', 
        'surname', 
        'preferred_name', 
        'gender', 
        'race', 
        'weight', 
        'height', 
        'dob', 
        'city_of_birth', 
        'country_of_birth', 
        'nationality',
        'telephone', 
        'mobile_number', 
        'fax', 
        'email', 
        'physical_address', 
        'postal_address', 
        'training_address',
        'occupation', 
        'employer_school', 
        'employer_school_address',
        'mother_name', 
        'mother_contact_number', 
        'mother_email',
        'father_name', 
        'father_contact_number', 
        'father_email',
        'next_of_kin_name', 
        'next_of_kin_contact_number',
        'medical_aid_name', 
        'main_medical_aid_member_name', 
        'medical_aid_number',
        'family_doctor', 
        'family_doctor_contact_number',
        'license_number', 
        'province',
        'event_1',
        'event_2',
        'profile_image',
    ];

    public function clubs(){
        return $this->belongsToMany(Club::class)->withPivot('start_date', 'end_date');
    }

    public function currentClubs(){
        return $this->clubs()->whereNull('end_date')->get();
    }

    public function hasClub($name){
        return $this->clubs()->where('name', $name)->first();
    }

    public function coaches(){
        return $this->belongsToMany(Coach::class)->withPivot('start_date', 'end_date');
    }

    public function currentCoach(){
        return $this->coaches()->whereNull('end_date')->get();
    }

    public function hasCoach($id_number){
        return $this->coaches()->where('id_number', $id_number)->first();
    }

    public function reps(){
        return $this->belongsToMany(Representative::class)->withPivot('start_date', 'end_date');
    }

    public function currentReps(){
        return $this->reps()->whereNull('end_date')->get();
    }

    public function hasRep($id_number){
        return $this->reps()->where('id_number', $id_number)->first();
    }
}
