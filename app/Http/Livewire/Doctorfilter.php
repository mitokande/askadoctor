<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Doctor;
use Illuminate\Http\Request;

class Doctorfilter extends Component
{
    public $search;

    public function search(){
        $this->emit('search', $this->search);
    }

    public function render(Request $request)
    {
        
        return view('livewire.doctorfilter');
    }
}
