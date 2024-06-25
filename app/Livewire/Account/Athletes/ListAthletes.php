<?php

namespace App\Livewire\Account\Athletes;

use Livewire\Component;
use Livewire\WithPagination;

use App\Models\Athlete;

class ListAthletes extends Component
{
    use WithPagination;

    public $search_key;

    public function updatedSearchKey(){
        $this->resetPage();
    }

    public function render(){
        $key = $this->search_key;
        $athletes = Athlete::query()
        ->when($key, function($q) use($key){
            return $q->where('id_number', 'LIKE', '%'.$key.'%')
            ->orWhere('first_name', 'LIKE', '%'.$key.'%')
            ->orWhere('surname', 'LIKE', '%'.$key.'%')
            ->orWhere('preferred_name', 'LIKE', '%'.$key.'%')
            ->orWhere('email', 'LIKE', '%'.$key.'%');
        })
        ->orderBy('first_name', 'ASC')
        ->orderBy('surname', 'ASC')
        ->paginate(12);

        return view('livewire.account.athletes.list-athletes', [
            'athletes' => $athletes
        ]);
    }
}
