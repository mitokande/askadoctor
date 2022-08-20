<?php

namespace App\Http\Livewire;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class Doctorlisting extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $search;

    public $spec;

    public function render()
    {
        // $this->doctors = Doctor::where("first_name","like",'%'.$this->search.'%')->paginate(5);
        return view('livewire.doctorlisting',[
            'doctors' => Doctor::when($this->search)->search(trim($this->search))->where("specialization","like","%".$this->spec."%")->paginate(5),
            'specs' => DB::table("doctors")->select("specialization")->distinct()->get()
        ]);
    }
}
