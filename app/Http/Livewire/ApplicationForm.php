<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ApplicationForm extends Component
{
    public $fname;
    public $mname;
    public $lname;
    public $email;
    public $contact;
    public $address;
    public $birthdate;
    public $status;
    public $education;
    public $position;
    public $know;
    public $recruiter;
    public $character;
    public $characteristic;
    public $plan;
    // public $resume;

    protected $rules = [
        'fname' => 'required|min:6',
        'mname' => 'required|min:6',
        'lname' => 'required|min:6',
        'email' => 'required|email',
        'contact' => 'required|min:11',
        'address' => 'required',
        'birthdate' => 'required',
        'status' => 'required',
        'education' => 'required',
        'position' => 'required',
        'know' => 'required',
        'recruiter' => 'required',
        'character' => 'required',
        'characteristic' => 'required',
        'plan' => 'required',
    ];

    public function submitForm(){
        $this->validate();
        session()->flash('successMessage', 'Validation successful!');
    }
    
    public function render()
    {
        return view('livewire.application-form');
    }
}
