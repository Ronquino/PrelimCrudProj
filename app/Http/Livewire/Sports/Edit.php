<?php

namespace App\Http\Livewire\Sports;
use App\Models\Sports;
use Livewire\Component;

class Edit extends Component
{

    public $sportsId;
    public $name, $address, $contact_number, $gender, $sports_name;
    public function mount() {
        $this->name = $this->sports->name;
        $this->address = $this->sports->address;
        $this->contact_number = $this->sports->contact_number;
        $this->gender = $this->sports->gender;
        $this->sports_name = $this->sports->sports_name;

    }

    public function editSports() {
        $this->validate([
            'name'                      =>          ['required', 'string', 'max:255'],
            'address'                   =>          ['required', 'string', 'max:255'],
            'contact_number'            =>          ['required', 'numeric', 'digits:11'],
            'gender'                    =>          ['required', 'string', 'max:255'],
            'sports_name'               =>          ['required', 'string', 'max:255']
        ]); 

        $this->sports->update([
            'name'                  =>      $this->name,
            'address'               =>      $this->address,
            'contact_number'        =>      $this->contact_number,
            'gender'                =>        $this->gender,
            'sports_name'           =>        $this->sports_name
        ]);

        return redirect('/sports')->with('message', 'Updated Successfully');
    }

    public function back() {
        return redirect('/sports');
    }
    public function getSportsProperty() {
        return Sports::find($this->sportsId);
    }

    public function render()
    {
        return view('livewire.sports.edit');
    }
}
