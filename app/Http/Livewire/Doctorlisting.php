<?php

namespace App\Http\Livewire;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\WithPagination;

class Doctorlisting extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    
    public function render(Request $request)
    {
        return view('livewire.doctorlisting',[
            'doctors' => Doctor::paginate(5),
        ]);
    }
}
