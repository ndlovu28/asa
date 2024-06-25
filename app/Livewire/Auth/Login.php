<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Auth;

class Login extends Component
{
    public $email, $password;

    public function mount(){
        if(!Auth::guest()){
            if(Auth::user()->role->name == "admin"){
                return redirect('dashboard');
            }
            return redirect('athlete/profile');
        }
    }
    
    public function authUser(){
        $this->validate([  
            'email' => 'required',   
            'password' => 'required'
        ]);

        $credentials = [
            'email' => $this->email,
            'password' => $this->password
        ];

        if(Auth::attempt($credentials)){
            $usr = Auth::user();
            if($usr->status == "disabled"){
                Auth::logout();
                $this->addError('user', 'Your account is inactive.');
            }
            if(Auth::user()->role->name == "admin"){
                return redirect('dashboard');
            }
            return redirect('athlete/profile');
        }
        else{
            $this->addError('user', 'Invalid email or password.');
        }
    }

    public function render(){
        return view('livewire.auth.login');
    }
}
