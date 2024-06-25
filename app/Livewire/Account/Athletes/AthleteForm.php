<?php

namespace App\Livewire\Account\Athletes;

use Livewire\Component;
use Livewire\WithFileUploads;

use App\Models\Athlete;
use App\Models\Club;
use App\Models\Coach;
use App\Models\Representative;

class AthleteForm extends Component
{
    use WithFileUploads;

    public $view, $ath_id;
    public $provinces = [];
    public $id_number, $passport_number, $passport_date_of_issue, $passport_expiry_date;
    public $first_name, $other_names, $surname, $preferred_name, $gender, $race, $weight, $height, $dob, $city_of_birth, $country_of_birth, $nationality;
    public $first_special_event, $second_special_event;
    public $club, $license_number, $province, $date_club_joined;
    public $telephone, $mobile_number, $fax, $email, $physical_address, $postal_address, $training_address;
    public $occupation, $employer_school, $employer_school_address;
    public $mother_name, $mother_contact_number, $mother_email;
    public $father_name, $father_contact_number, $father_email;
    public $next_of_kin_name, $next_of_kin_contact_number;
    public $coach_id_number, $coach_name, $coach_surname, $coach_work_contact_number, $coach_home_contact_number, $coach_mobile_contact_number, $coach_email, $date_coach_started;
    public $representative_id_number, $representative_name, $representative_surname, $representative_work_contact_number, $representative_mobile_contact_number, $representative_email, $representative_start_date;
    public $medical_aid_name, $main_medical_aid_member_name, $medical_aid_number;
    public $family_doctor, $family_doctor_contact_number;
    public $profile_image;

    public function mount($id = null){
        if($id){
            $this->ath_id = $id;
            $this->view = "Edit";
            $this->getData();
        }
        else{
            $this->view = "Create";
        }
        $this->setStaticData();
    }

    public function getData(){
        if($this->ath_id){
            $ath = Athlete::find($this->ath_id);
            if($ath){
                $this->view = "Edit";
                $this->id_number = $ath->id_number;
                $this->passport_number = $ath->passport_number;
                $this->passport_date_of_issue = $ath->passport_date_of_issue;
                $this->passport_expiry_date = $ath->passport_expiry_date;

                $this->first_name = $ath->first_name;
                $this->other_names = $ath->other_names;
                $this->surname = $ath->surname;
                $this->preferred_name = $ath->preferred_name;
                $this->gender = $ath->gender;
                $this->race = $ath->race;
                $this->weight = $ath->weight;
                $this->height = $ath->height;
                $this->dob = $ath->dob;
                $this->city_of_birth = $ath->city_of_birth;
                $this->country_of_birth = $ath->country_of_birth;
                $this->nationality = $ath->nationality;

                $this->first_special_event = $ath->event_1; 
                $this->second_special_event = $ath->event_2;

                if($ath->currentClubs()->count() > 0){
                    $club = $ath->currentClubs()->first();
                    $this->club = $club->name;
                    $this->license_number = $ath->license_number;
                    $this->province = $ath->province;
                    $this->date_club_joined = $club->pivot->start_date;
                }

                $this->telephone = $ath->telephone;
                $this->mobile_number = $ath->mobile_number;
                $this->fax = $ath->fax;
                $this->email = $ath->email;
                $this->physical_address = $ath->physical_address;
                $this->postal_address = $ath->postal_address;
                $this->training_address = $ath->training_address;

                $this->occupation = $ath->occupation;
                $this->employer_school = $ath->employer_school;
                $this->employer_school_address = $ath->employer_school_address;

                $this->mother_name = $ath->mother_name;
                $this->mother_contact_number = $ath->mother_contact_number;
                $this->mother_email = $ath->mother_email;

                $this->father_name = $ath->father_name;
                $this->father_contact_number = $ath->father_contact_number;
                $this->father_email = $ath->father_email;

                $this->next_of_kin_name = $ath->next_of_kin_name;
                $this->next_of_kin_contact_number = $ath->next_of_kin_contact_number;

                if($ath->currentCoach()->count() > 0){
                    $coach = $ath->currentCoach()->first();
                    $this->coach_id_number = $coach->id_number;
                    $this->coach_name = $coach->name;
                    $this->coach_surname = $coach->surname;
                    $this->coach_work_contact_number = $coach->work_contact_number;
                    $this->coach_home_contact_number = $coach->home_contact_number;
                    $this->coach_mobile_contact_number = $coach->mobile_contact_number;
                    $this->coach_email = $coach->email;
                    $this->date_coach_started = $coach->pivot->start_date;
                }

                if($ath->currentReps()->count() > 0){
                    $rep = $ath->currentReps()->first();
                    $this->representative_id_number = $rep->id_number;
                    $this->representative_name = $rep->name;
                    $this->representative_surname = $rep->surname;
                    $this->representative_work_contact_number = $rep->work_contact_number;
                    $this->representative_mobile_contact_number = $rep->mobile_contact_number;
                    $this->representative_email = $rep->email;
                    $this->representative_start_date = $rep->pivot->start_date;
                }

                $this->medical_aid_name = $ath->medical_aid_name;
                $this->main_medical_aid_member_name = $ath->main_medical_aid_member_name;
                $this->medical_aid_number = $ath->medical_aid_number;

                $this->family_doctor = $ath->family_doctor;
                $this->family_doctor_contact_number = $ath->family_doctor_contact_number;
            }
        }
    }

    public function saveAthlete(){
        $this->dispatch('scroll-to-top');
        $this->validate([
            'id_number' => 'required',
            'first_name' => 'required',
            'surname' => 'required',
            'gender' => 'required',
            'race' => 'required',
            'weight' => 'required',
            'height' => 'required',
            'dob' => 'required',
            'city_of_birth' => 'required',
            'country_of_birth' => 'required',
            'nationality' => 'required',
            'mobile_number' => 'required',
            'physical_address' => 'required',
        ]);

        $img_path = null;
        if($this->profile_image){
            $img_path = $this->profile_image->storePublicly('profile_images', 'public');
        } 

        if($this->ath_id){
            $ath = Athlete::find($this->ath_id);
        }
        else{
            $ath = new Athlete();
        }
        if($img_path){
            $ath->profile_image = $img_path;
        }
        $ath->id_number = $this->id_number;
        $ath->passport_number = $this->passport_number;
        $ath->passport_date_of_issue = $this->passport_date_of_issue;
        $ath->passport_expiry_date = $this->passport_expiry_date;
        $ath->first_name = $this->first_name;
        $ath->other_names = $this->other_names;
        $ath->surname = $this->surname;
        $ath->preferred_name = $this->preferred_name;
        $ath->gender = $this->gender;
        $ath->race = $this->race;
        $ath->weight = $this->weight;
        $ath->height = $this->height;
        $ath->dob = $this->dob;
        $ath->city_of_birth = $this->city_of_birth;
        $ath->country_of_birth = $this->country_of_birth;
        $ath->nationality = $this->nationality;
        $ath->telephone = $this->telephone;
        $ath->mobile_number = $this->mobile_number;
        $ath->fax = $this->fax;
        $ath->email = $this->email;
        $ath->physical_address = $this->physical_address;
        $ath->postal_address = $this->postal_address;
        $ath->training_address = $this->training_address;
        $ath->occupation = $this->occupation;
        $ath->employer_school = $this->employer_school;
        $ath->employer_school_address = $this->employer_school_address;
        $ath->mother_name = $this->mother_name;
        $ath->mother_contact_number = $this->mother_contact_number;
        $ath->mother_email = $this->mother_email;
        $ath->father_name = $this->father_name;
        $ath->father_contact_number = $this->father_contact_number; 
        $ath->father_email = $this->father_email;
        $ath->next_of_kin_name = $this->next_of_kin_name;
        $ath->next_of_kin_contact_number = $this->next_of_kin_contact_number;
        $ath->medical_aid_name = $this->medical_aid_name;
        $ath->main_medical_aid_member_name = $this->main_medical_aid_member_name;
        $ath->medical_aid_number = $this->medical_aid_number;
        $ath->family_doctor = $this->family_doctor;
        $ath->family_doctor_contact_number = $this->family_doctor_contact_number;
        $ath->license_number = $this->license_number;
        $ath->province = $this->province;
        $ath->event_1 = $this->first_special_event; 
        $ath->event_2 = $this->second_special_event;
        $ath->save();

        if($this->club){
            $cl = Club::where('name', $this->club)->first();
            if(!$cl){
                $cl = new Club();
                $cl->name = $this->club;
                $cl->province = $this->province;
                $cl->save();
            }
            if(!$ath->hasClub($this->club)){
                $ath->clubs()->attach($cl->id, ['start_date' => $this->date_club_joined]);
            }
        }

        if($this->coach_id_number){
            $ch = Coach::where('id_number', $this->coach_id_number)->first();
            if(!$ch){
                $ch = new Coach();
                $ch->name = $this->coach_name;
                $ch->surname = $this->coach_surname;
                $ch->id_number = $this->coach_id_number;
                $ch->work_contact_number = $this->coach_work_contact_number;
                $ch->home_contact_number = $this->coach_home_contact_number;
                $ch->mobile_contact_number = $this->coach_mobile_contact_number;
                $ch->email = $this->coach_email;
                $ch->save();
            }
            if(!$ath->hasCoach($this->coach_id_number)){
                $ath->coaches()->attach($ch->id, ['start_date' => $this->date_coach_started]);
            }
        }

        if($this->representative_id_number){
            $rep = Representative::where('id_number', $this->representative_id_number)->first();
            if(!$rep){
                $rep = new Representative();
                $rep->name = $this->representative_name;
                $rep->surname = $this->representative_surname;
                $rep->id_number = $this->representative_id_number;
                $rep->work_contact_number = $this->representative_work_contact_number;
                $rep->mobile_contact_number = $this->representative_mobile_contact_number;
                $rep->email = $this->representative_email;
                $rep->save();
            }
            if(!$ath->hasRep($this->representative_id_number)){
                $ath->reps()->attach($rep->id, ['start_date' => $this->representative_start_date]);
            }
        }
        $this->dispatch('show-success-message');
    }

    public function setStaticData(){
        $this->provinces = [
            'Eastern Cape',
            'Free State',
            'Gauteng',
            'Kwazulu Natal',
            'Limpopo',
            'Mpumalanga',
            'Northern Cape',
            'North West',
            'Western Cape',
        ];
    }

    public function render(){
        return view('livewire.account.athletes.athlete-form');
    }
}
