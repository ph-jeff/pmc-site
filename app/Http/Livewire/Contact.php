<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Contact extends Component
{
    public $fname;
    public $lname;
    public $email;
    public $contact;
    public $message;
    
    protected $rules = [
        'fname' => 'required',
        'lname' => 'required',
        'email' => 'required|email',
        'contact' => 'required',
        'message' => 'required',
    ];

    public function submitFormContact(){
        $data = $this->validate();

        // dd($data);
        session()->flash('successMessage', 'Validation successful!');

        return redirect('/contact');
    }
    public function render()
    {
        return view('livewire.contact');
    }
}
