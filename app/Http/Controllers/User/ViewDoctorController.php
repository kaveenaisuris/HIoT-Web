<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Appointment;

use Illuminate\Support\Facades\Notification;
use App\Notifications\AppointmentNotification;

class ViewDoctorController extends Controller
{
    public function index(Request $request)
    {
        // $model = Faq::query();

        // if (isset($request->q)) {
        //     $model = $model->where('question', 'like', '%' . $request->q . '%');
        // }
     $model = User::where('role_id','2')->get();

     return view('user.doctor.index', [
            'pageTitle' => 'Doctor',
            'items'=> $model,])->render();
    }

    public function show($id)
    {
        $report = User::find($id);
        return view('user.doctor.show', [
            'pageTitle' => 'History',
            'entity' => $report,
        ])->render();
    }

    public function edit($id)
    {
        $user = Auth()->user();
        $doctor = User::where('id',$id)->first();
        return view('user.doctor.create', [
            'entity' => $user,
            'doctor' =>$doctor,
            'pageTitle' => 'Create Appointment',
        ]);
    }
    public function update($id, Request $request)
    {
       
      
        $user = new Appointment();
        $user->user_id = Auth()->user()->id;
        $user->doctor_id = $id;
        $user->date = $request->date;
        $user->message = $request->message;
        $user->status = 'Pending';
        $user->save();

        $doctor = User::find($id);

        $email = [
            'greeting' => 'Hi '.$doctor->name.',',
            'body' => 'You have recived and appointment from '. Auth()->user()->name,
            'email'=>'Email- ' .Auth()->user()->email,
            'text'=>'Thank you'
        ];

        Notification::send($doctor, new AppointmentNotification($email));
        return redirect()->back()->with('success');
    }

}
