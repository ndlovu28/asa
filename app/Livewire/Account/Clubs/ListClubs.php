<?php

namespace App\Livewire\Account\Clubs;

use Livewire\Component;
use Livewire\WithPagination;

use App\Models\Club;

class ListClubs extends Component
{
    use WithPagination;

    public $search_key;

    public function updatedSearchKey(){
        $this->resetPage();
    }

    public function render(){
        $key = $this->search_key;

        $clubs = Club::query()
        ->when($key, function($q) use($key){
            return $q->where('name', 'LIKE', '%'.$key.'%')
            ->orWhere('registration_number', 'LIKE', '%'.$key.'%')
            ->orWhere('tel', 'LIKE', '%'.$key.'%')
            ->orWhere('email', 'LIKE', '%'.$key.'%')
            ->orWhere('province', 'LIKE', '%'.$key.'%');
        })
        ->orderBy('name', 'ASC')
        ->paginate(12);

        return view('livewire.account.clubs.list-clubs', [
            'clubs' => $clubs
        ]);
    }
}
