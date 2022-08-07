<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class DoctorController extends Controller
{
    //
    public function showSingle($doctor){
        return view('single-doctor',['doctor'=> Doctor::where('username',$doctor)->first()]);
    }

    public function list(){
        return view('list',['doctors'=>Doctor::all()]);
    }
}