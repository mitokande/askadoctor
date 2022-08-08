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

    public function store(Request $request){
        $doctor = new Doctor();
        $doctor->first_name = $request->first_name;
        $doctor->last_name = $request->last_name;
        $doctor->username = Doctor::getUsername($request->first_name.' '.$request->last_name);
        $doctor->email = $request->email;
        $doctor->telephone = $request->telephone;
        $doctor->profile_picture = $request->profile_picture;
        $doctor->about = $request->about;
        $doctor->service = $request->service;
        $doctor->city = $request->city;
        $doctor->address = $request->address;
        $doctor->state = $request->state;
        $doctor->zipcode = $request->zipcode;
        $doctor->education = $request->education;
        $doctor->specialization = $request->specialization;
        $doctor->save();
        
        return $doctor;
    }

    public function create(){
        return view('add-doctor');
    }
}