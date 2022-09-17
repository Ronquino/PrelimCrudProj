<?php

namespace App\Http\Livewire\Sports;

use Livewire\Component;
use App\Models\Sports;

class Create extends Component
{
    public $name, $address, $contact_number, $gender, $sports_name;

    public function addSports() {
        $this->validate([
            'name'                      =>          ['required', 'string', 'max:255'],
            'address'                   =>          ['required', 'string', 'max:255'],
            'contact_number'            =>          ['required', 'numeric', 'digits:11'],
            'gender'                    =>          ['required', 'string', 'max:255'],
            'sports_name'                    =>          ['required', 'string', 'max:255']
        ]); 

        Sports::create([
            'name'                  =>      $this->name,
            'address'               =>      $this->address,
            'contact_number'        =>      $this->contact_number,
            'gender'                =>        $this->gender,
            'sports_name'                =>        $this->sports_name
        ]);

        return redirect('/sports')->with('message', 'Added Successfully');
    }


    public function render()
    {
        return view('livewire.sports.create');
    }
}