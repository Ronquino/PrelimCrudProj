<?php

namespace App\Http\Livewire\Sports;

use Livewire\Component;
use App\Models\Sports;

class Index extends Component
{

    public function loadSports() {
        $sports = Sports::orderBy('name')->get();

        return compact('sports');
    }

    public function render()
    {
        return view('livewire.sports.index', $this->loadSports());
    }
}
