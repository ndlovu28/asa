<?php

namespace App\Livewire\Account\Clubs;

use Livewire\Component;

use Auth;
use App\Models\Club;
use App\Models\ClubManagement;

class Details extends Component
{
    public $club_id;

    public function mount($id){
        $this->club_id = $id;
    }

    public function Deactivate($id){
        $club = Club::find($this->club_id);
        $man = $club->management->where('id', $id)->first();
        $man->pivot->end_date = date('Y-m-d');
        $man->pivot->save();
    }

    public function render(){
        $club = Club::find($this->club_id);
        $types = ['chairperson', 'vice_chairperson', 'secretary', 'treasurer', 'additional_member'];
        $management = $club->management()
        ->whereNull('end_date')
        ->get()
        ->sortBy(function($q) use($types){
            return array_search($q->pivot->type, $types);
        });
        return view('livewire.account.clubs.details', [
            'club' => $club,
            'management' => $management
        ]);
    }
}
