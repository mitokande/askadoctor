<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use Illuminate\Http\Request;
use MacsiDigital\Zoom\Facades\Zoom;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    //
    public function CreateZoomMeeting($doctor,Request $request){
      // $d = new Carbon($request->year.' '.$request->time);
      // echo $d;
      // echo '<br>'.$request->year;
      // return;
        $doc = Doctor::where('username',$doctor)->first();
        $username = Auth::user()->name;
        $zoom = Zoom::user()->first();
        $meeting = Zoom::meeting()->make([
            'topic' => $username. ' ve Doctor ' .$doc->first_name.' '.$doc->last_name.' ile '.$doc->specialization.' Görüşmesi',
            'duration' => '30',
            'start_time' => new Carbon($request->year.' '.$request->time)

          ]);
         
        $meeting->settings()->make([
                'join_before_host' => true,
                'approval_type' => 1,
                'registration_type' => 2,
                'enforce_login' => false,
                'waiting_room' => false,
              ]);
        $zoom->meetings()->save($meeting);
        // $meetings = $zoom->meetings()->all();
        // $meeting->start_url
        $price = count($request->subject)*100;
        $appointment = new Appointment();
        $appointment->user_id = Auth::user()->id;
        $appointment->doctor_id = $doc->id;
        $appointment->meeting_id = $meeting->id;
        $appointment->appointment_time = new Carbon($request->year.' '.$request->time);
        $appointment->user_ip = $request->ip();
        $appointment->appointment_type = $request->type;
        $appointment->appointment_subject = json_encode($request->subject);
        $appointment->appointment_note =  $request->note;
        $appointment->appointment_status =  "Booked";
        $appointment->appointment_link =  $meeting->start_url;
        $appointment->appointment_password =  $meeting->password;
        $appointment->appointment_price = $price;
        $appointment->appointment_paid_price = 0;
        $appointment->save();


        return redirect($doc->username);
    }


    public function listBookings(){
      return view('dashboard.bookings',[
        'appointments' => Appointment::all()->where('user_id',Auth::user()->id)
    ]);
    }
}
