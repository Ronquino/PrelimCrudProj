<?php

namespace App\Http\Livewire\Sports;

use Livewire\Component;
use App\Models\Sports;
use App\Events\UserLog;
class Delete extends Component
{

    public $sportsId;
    public function getsportsProperty() {
        return sports::select('id', 'name', 'contact_number', 'sports_name')
            ->find($this->sportsId);
    }

    public function delete() {
        $this->sports->delete();

        $log_entry = 'Delete sports "' . $this->sports->name . '"with the ID# ' . $this->sports->id;
        event(new UserLog($log_entry));


        return redirect('/books')->with('message', 'Deleted Successfully');
    }

    public function back() {
        return redirect('/books');
    }
    public function render()
    {
        return view('livewire.sports.delete');
    }
}
