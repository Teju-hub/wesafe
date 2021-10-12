<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Loginpage extends Component
{
	public $username,$password;
	
    public function render()
    {
        return view('livewire.loginpage');
    }
	public function validation(){
		
		$validatedData = $this->validate([
            'username'=>'required',
           	'password'=> 'required|min:8|max:12|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
        ]);
		
	}
}
