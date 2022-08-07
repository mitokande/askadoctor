<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use MacsiDigital\Zoom\Facades\Zoom;
use Carbon\Carbon;

class AppointmentController extends Controller
{
    //
    public function CreateZoomMeeting($doctor){
        $doc = Doctor::where('username',$doctor)->first();
        
        $zoom = Zoom::user()->first();
        $meeting = Zoom::meeting()->make([
            'topic' => $doc->first_name.' '.$doc->last_name.' ile '.$doc->specialization.' Görüşmesi',
            'type' => 8,
            'start_time' => new Carbon('2022-08-08 02:00:00')
        ]);
         $meeting->recurrence()->make([
            'type' => 2,
            'repeat_interval' => 1,
            'weekly_days' => '2',
            'end_times' => 5
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
