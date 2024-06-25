<?php

namespace App\Livewire\Account\Athletes;

use Livewire\Component;

use App\Models\Athlete;

class ViewAthlete extends Component
{
    public $ath_id;

    public function mount($id){
        $this->ath_id = $id;
    }

    public function render(){
        $ath = Athlete::find($this->ath_id);
        return view('livewire.account.athletes.view-athlete', [
            'ath' => $ath
        ]);
    }
}
