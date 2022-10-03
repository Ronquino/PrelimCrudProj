<?php

namespace App\Http\Livewire\Sports;

use Livewire\Component;
use App\Models\Sports;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $search, $gender = 'all', $sports_name = 'all';
    

    protected $paginationTheme = 'bootstrap';

    public function loadSports() {
        $query = Sports::orderBy('name')
        ->search($this->search);
        
        if ($this->gender != 'all') {
            $query->where('gender', $this->gender);
        }

        if ($this->sports_name != 'all') {
            $query->where('sports_name', $this->sports_name);
        }

        $sports = $query->paginate(5);

        return compact('sports');
    }

    public function render()
    {
        return view('livewire.sports.index', $this->loadSports());
    }
}
