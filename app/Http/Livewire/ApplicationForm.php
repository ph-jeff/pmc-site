<?php

namespace App\Http\Livewire;

use App\Enums\CivilStatus;
use App\Enums\EducationalBackground;
use Livewire\Component;

class ApplicationForm extends Component
{
    public $firstname;
    public $middlename;
    public $lastname;
    public $email;
    public $contactnum;
    public $address;
    public $birthdate;

    public $character_references;
    public $character;
    public $plan;
    public $status;
    public $statuses;
    public $educational;
    public $educationals;
    public $position;
    public $positions = [
        'key0' => 'Choose an option',
        'key1' => 'lorem1',
        'key2' => 'lorem2',
        'key3' => 'lorem3',
        'key4' => 'lorem4',
    ];
    public $know;
    public $knows = [
        'key0' => 'Choose an option',
        'key1' => 'Facebook',
        'key2' => 'Indeed',
        'key3' => 'Linkedin',
        'key4' => 'Jobstreet',
    ];
    public $Recruiter;
    public $Recruiters = [
        'key0' => 'Choose an option',
        'key1' => 'Honey',
        'key2' => 'Alex',
        'key3' => 'Erika',
        'key4' => 'Other',
    ];


    // public $resume;

    protected $rules = [
        'firstname' => 'required',
        'middlename' => 'required',
        'lastname' => 'required',
        'email' => 'required',
        'contactnum' => 'required',
        'address' => 'required',
        'birthdate' => 'required',
        'status' => 'required',
        'educational' => 'required',
        'position' => 'required',
        'know' => 'required',
        'Recruiter' => 'required',
        'character_references' => 'required',
        'character' => 'required',
        'plan' => 'required',
    ];

    public function mount()
    {
        //Statuses will get it's values from CivilStatus Enum
        $this->statuses = CivilStatus::asSelectArray();
        $this->educationals = EducationalBackground::asSelectArray();
    }
    public function submitForm()
    {
        $this->validate();
        session()->flash('successMessage', 'Validation successful!');

        return redirect('/application-form');
        // return 'hello';
    }
    public function render()
    {
        return view('livewire.application-form')->extends('layouts.app')->section('main');
    }
}
