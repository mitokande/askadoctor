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
    public $search;
    protected $listeners = ['search' => 'render'];

    public function render(Request $request)
    {
        return view('livewire.doctorlisting',[
            'doctors' => Doctor::when($request->search)->search(trim($request->search))->paginate(5),
        ]);
    }
}
