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

    public function render()
    {
        // $this->doctors = Doctor::where("first_name","like",'%'.$this->search.'%')->paginate(5);
        return view('livewire.doctorlisting',[
            'doctors' => Doctor::when($this->search)->search(trim($this->search))->paginate(5),
        ]);
    }
}
