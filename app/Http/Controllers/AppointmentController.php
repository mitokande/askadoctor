<?php

namespace App\Http\Controllers;

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
        $meetings = $zoom->meetings()->all();
        
        return($meetings);
    }
}
