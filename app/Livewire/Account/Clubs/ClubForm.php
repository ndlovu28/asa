<?php

namespace App\Livewire\Account\Clubs;

use Livewire\Component;
use Livewire\WithFileUploads;

use App\Models\Club;
use App\Models\ClubManagement;
use App\Models\Coach;

class ClubForm extends Component
{
    use WithFileUploads;

    public $club_id, $view;
    public $provinces = [];

    public $logo, $name, $registration_number, $tel, $email, $province, $address;
    public $chairperson_id_number, $chairperson_first_name, $chairperson_surname, $chairperson_contact_number, $chairperson_email, $chairperson_date_appointed;
    public $vice_chairperson_id_number, $vice_chairperson_first_name, $vice_chairperson_surname, $vice_chairperson_contact_number, $vice_chairperson_email, $vice_chairperson_date_appointed;
    public $secretaries = [];
    public $treasurer_id_number, $treasurer_first_name, $treasurer_surname, $treasurer_contact_number, $treasurer_email, $treasurer_date_appointed;
    public $technical_manager_id_number, $technical_manager_first_name, $technical_manager_surname, $technical_manager_contact_number, $technical_manager_email;
    public $additional_members = [];

    public function mount($id = null){
        if($id){
            $this->club_id = $id;
            $this->view = "Edit";
        }
        else{
            $this->view = "Create";
        }
        $this->setStaticData();
        $this->getData();
    }

    public function updatedTreasurerIdNumber(){
        $cl = ClubManagement::where('id_number', $this->treasurer_id_number)->first();
        if($cl){ 
            $this->treasurer_first_name = $cl->name;
            $this->treasurer_surname = $cl->surname;
            $this->treasurer_contact_number = $cl->contact_number;
            $this->treasurer_email = $cl->email;
        }
        
    }

    public function updatedChairpersonIdNumber(){
        $cl = ClubManagement::where('id_number', $this->chairperson_id_number)->first();
        if($cl){
            $this->chairperson_first_name = $cl->name;
            $this->chairperson_surname = $cl->surname;
            $this->chairperson_contact_number = $cl->contact_number;
            $this->chairperson_email = $cl->email;
        }
    }

    public function updatedViceChairpersonIdNumber(){
        $cl = ClubManagement::where('id_number', $this->vice_chairperson_id_number)->first();
        if($cl){
            $this->vice_chairperson_first_name = $cl->name;
            $this->vice_chairperson_surname = $cl->surname;
            $this->vice_chairperson_contact_number = $cl->contact_number;
            $this->vice_chairperson_email = $cl->email;
        }
    }

    public function updatedSecretaries($v,$k){
        $arr = explode('.',$k);
        $i = $arr[0];
        $key = $arr[1];
        if($key == 'id_number'){
            $cl = ClubManagement::where('id_number', $v)->first();
            if($cl){
                $this->secretaries[$i]['name'] = $cl->name;
                $this->secretaries[$i]['surname'] = $cl->surname;
                $this->secretaries[$i]['contact_number'] = $cl->contact_number;
                $this->secretaries[$i]['email'] = $cl->email;
            }
        }
    }

    public function updatedAdditionalMembers($v, $k){
        $arr = explode('.',$k);
        $i = $arr[0];
        $key = $arr[1];
        if($key == 'id_number'){
            $cl = ClubManagement::where('id_number', $v)->first();
            if($cl){
                $this->additional_members[$i]['name'] = $cl->name;
                $this->additional_members[$i]['surname'] = $cl->surname;
                $this->additional_members[$i]['contact_number'] = $cl->contact_number;
                $this->additional_members[$i]['email'] = $cl->email;
            }
        }
    }

    public function getData(){
        if($this->club_id){
            $club = Club::find($this->club_id);
            if($club){ 
                $this->name = $club->name;
                $this->registration_number = $club->registration_number;
                $this->tel = $club->tel;
                $this->email = $club->email;
                $this->province = $club->province;
                $this->address = $club->address;

                $chair = $club->managementByType('chairperson')->first();
                if($chair){
                    $this->chairperson_id_number = $chair->id_number;
                    $this->chairperson_first_name = $chair->name;
                    $this->chairperson_surname = $chair->surname;
                    $this->chairperson_contact_number = $chair->contact_number;
                    $this->chairperson_email = $chair->email;
                    $this->chairperson_date_appointed = $chair->pivot->start_date;
                }
                
                $vice_chair = $club->managementByType('vice_chairperson')->first();
                if($vice_chair){
                    $this->vice_chairperson_id_number = $vice_chair->id_number;
                    $this->vice_chairperson_first_name = $vice_chair->name;
                    $this->vice_chairperson_surname = $vice_chair->surname;
                    $this->vice_chairperson_contact_number = $vice_chair->contact_number;
                    $this->vice_chairperson_email = $vice_chair->email;
                    $this->vice_chairperson_date_appointed = $vice_chair->pivot->start_date;
                }

                $secs = $club->managementByType('secretary');
                if($secs){
                    $this->secretaries = [];
                    foreach($secs AS $sec){
                        $arr = [
                            'id_number' => $sec->id_number,
                            'name' => $sec->name,
                            'surname' => $sec->surname,
                            'contact_number' => $sec->contact_number,
                            'email' => $sec->email,
                            'start_date' => $sec->pivot->start_date
                        ];
                        $this->secretaries[] = $arr;
                    }
                }

                $treasurer = $club->managementByType('treasurer')->first();
                if($treasurer){
                    $this->treasurer_id_number = $treasurer->id_number;
                    $this->treasurer_first_name = $treasurer->name;
                    $this->treasurer_surname = $treasurer->surname;
                    $this->treasurer_contact_number = $treasurer->contact_number;
                    $this->treasurer_email = $treasurer->email;
                    $this->treasurer_date_appointed = $treasurer->pivot->start_date;
                }
                
                $coach = $club->coach;
                if($coach){
                    $this->technical_manager_id_number = $coach->id_number;
                    $this->technical_manager_first_name = $coach->name;
                    $this->technical_manager_surname = $coach->surname;
                    $this->technical_manager_contact_number = $coach->mobile_contact_number;
                    $this->technical_manager_email = $coach->email;
                }

                $addtions = $club->managementByType('additional_member');
                if($addtions){
                    $this->additional_members = [];
                    foreach($addtions AS $add){
                        $arr = [
                            'id_number' => $add->id_number,
                            'name' => $add->name,
                            'surname' => $add->surname,
                            'contact_number' => $add->contact_number,
                            'email' => $add->email,
                            'start_date' => $add->pivot->start_date
                        ];
                        $this->additional_members[] = $arr;
                    }
                }
            }
        }
        if(count($this->secretaries) == 0){
            $this->addSecretary();
        }
        if(count($this->additional_members) == 0){
            $this->addAdditionalMember();
        }
    }

    public function addAdditionalMember(){
        $arr = [
            'id_number' => null,
            'name' => null,
            'surname' => null,
            'contact_number' => null,
            'email' => null,
            'start_date' => null
        ];
        $this->additional_members[] = $arr;
    }

    public function addSecretary(){
        $arr = [
            'id_number' => null,
            'name' => null,
            'surname' => null,
            'contact_number' => null,
            'email' => null,
            'start_date' => null
        ];
        $this->secretaries[] = $arr;
    }

    public function saveClub(){
        $this->validate([
            'name' => 'required', 
            'registration_number' => 'required', 
            'tel' => 'required', 
            'email' => 'required', 
            'province' => 'required', 
            'address' => 'required'
        ]);

        if($this->club_id){
            $club = Club::find($this->club_id);
        }
        else{
            $club = new Club();
        }

        $logo_path = null;
        if($this->logo){
            $logo_path = $this->logo->storePublicly('club_logos', 'public');
        }

        $club->name = $this->name;
        $club->registration_number = $this->registration_number;
        $club->tel = $this->tel;
        $club->email = $this->email;
        $club->province = $this->province;
        $club->address = $this->address;
        if($logo_path){
            $club->logo = $logo_path;
        }
        $club->save();

        if($this->chairperson_id_number){
            $chair = ClubManagement::where('id_number', $this->chairperson_id_number)->first();
            if(!$chair){
                $chair = ClubManagement::create([
                    'id_number' => $this->chairperson_id_number,
                    'name' => $this->chairperson_first_name,
                    'surname' => $this->chairperson_surname,
                    'contact_number' => $this->chairperson_contact_number,
                    'email' => $this->chairperson_email
                ]);
            }
            if(!$club->hasManagement('chairperson', $chair->id)){
                if(!$this->chairperson_date_appointed){
                    $this->chairperson_date_appointed = date('Y-m-d');
                }
                $club->management()->attach($chair->id, ['type'=>'chairperson', 'start_date'=>$this->chairperson_date_appointed]);
            }
        }

        if($this->vice_chairperson_id_number){
            $vice_chair = ClubManagement::where('id_number', $this->vice_chairperson_id_number)->first();
            if(!$vice_chair){
                $vice_chair = ClubManagement::create([
                    'id_number' => $this->vice_chairperson_id_number,
                    'name' => $this->vice_chairperson_first_name,
                    'surname' => $this->vice_chairperson_surname,
                    'contact_number' => $this->vice_chairperson_contact_number,
                    'email' => $this->vice_chairperson_email
                ]);
            }
            if(!$club->hasManagement('vice_chairperson', $vice_chair->id)){
                $club->management()->attach($vice_chair->id, ['type'=>'vice_chairperson', 'start_date'=>$this->vice_chairperson_date_appointed]);
            }
        }

        foreach($this->secretaries AS $secs){
            $sec = ClubManagement::where('id_number', $secs['id_number'])->first();
            if(!$sec){
                $sec = ClubManagement::create([
                    'id_number' => $secs['id_number'],
                    'name' => $secs['name'],
                    'surname' => $secs['surname'],
                    'contact_number' => $secs['contact_number'],
                    'email' => $secs['email']
                ]);
            }
            if(!$club->hasManagement('secretary', $sec->id)){
                $club->management()->attach($sec->id, ['type'=>'secretary', 'start_date'=>$secs['start_date']]);
            }
        }

        foreach($this->additional_members AS $additional){
            $add = ClubManagement::where('id_number', $additional['id_number'])->first();
            if(!$add){
                $add = ClubManagement::create([
                    'id_number' => $additional['id_number'],
                    'name' => $additional['name'],
                    'surname' => $additional['surname'],
                    'contact_number' => $additional['contact_number'],
                    'email' => $additional['email']
                ]);
            }
            if(!$club->hasManagement('additional_member', $add->id)){
                $club->management()->attach($add->id, ['type'=>'additional_member', 'start_date'=>$additional['start_date']]);
            }
        }

        if($this->treasurer_id_number){
            $treasurer = ClubManagement::where('id_number', $this->treasurer_id_number)->first();
            if(!$treasurer){
                $treasurer = ClubManagement::create([
                    'id_number' => $this->treasurer_id_number,
                    'name' => $this->treasurer_first_name,
                    'surname' => $this->treasurer_surname,
                    'contact_number' => $this->treasurer_contact_number,
                    'email' => $this->treasurer_email
                ]);
            }
            if(!$club->hasManagement('treasurer', $treasurer->id)){
                $club->management()->attach($treasurer->id, ['type'=>'treasurer', 'start_date'=>$this->treasurer_date_appointed]);
            }
        }

        $coach = $club->coach;
        if(!$coach){
            $coach = new Coach();
        }
        $coach->id_number = $this->technical_manager_id_number;
        $coach->name = $this->technical_manager_first_name;
        $coach->surname = $this->technical_manager_surname;
        $coach->mobile_contact_number = $this->technical_manager_contact_number;
        $coach->email = $this->technical_manager_email;
        $coach->club_id = $club->id;
        $coach->save();

        $this->club_id = $club->id;
        $this->getData();
    }

    public function render(){
        return view('livewire.account.clubs.club-form');
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
}
