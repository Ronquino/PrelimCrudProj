<?php

namespace App\Http\Livewire\Sports;

use Livewire\Component;
use App\Models\Sports;
use App\Events\UserLog;

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

        $sports = Sports::create([
            'name'                  =>      $this->name,
            'address'               =>      $this->address,
            'contact_number'        =>      $this->contact_number,
            'gender'                =>        $this->gender,
            'sports_name'                =>        $this->sports_name
        ]);

        $log_entry = 'Added a sports "' . $sports->sports_name . '" with the ID# of ' . $sports->id;
        event(new UserLog($log_entry));

        return redirect('/books')->with('message', 'Added Successfully');
    }


    public function render()
    {
        return view('livewire.sports.create');
    }
}