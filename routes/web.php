<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Auth\Login;

use App\Livewire\Account\Dashboard;
use App\Livewire\Account\Athletes\AthleteForm;
use App\Livewire\Account\Athletes\ListAthletes;
use App\Livewire\Account\Athletes\ViewAthlete;

use App\Livewire\Account\Clubs\ListClubs;
use App\Livewire\Account\Clubs\ClubForm;
use App\Livewire\Account\Clubs\Details AS ClubDetails;

Route::get('/', Login::class)->name('login');

Route::middleware(['auth'])->group(function (){
	Route::get('dashboard', Dashboard::class);

	Route::get('athletes/form', AthleteForm::class);
	Route::get('athletes/form/{id}', AthleteForm::class);
	Route::get('athletes/list', ListAthletes::class);
	Route::get('athletes/view/{id}', ViewAthlete::class);

	Route::get('clubs/list', ListClubs::class);
	Route::get('clubs/form', ClubForm::class);
	Route::get('clubs/form/{id}', ClubForm::class);
	Route::get('clubs/view/{id}', ClubDetails::class);
});
