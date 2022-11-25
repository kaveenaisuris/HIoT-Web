<?php

namespace App\Http\Controllers\Manager;

use App\Appointment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Patiant;
use Illuminate\Support\Facades\Auth;

class AppoinmentController extends Controller
{
    public function index(Request $request)
    {
        $model = Appointment::where('doctor_id',Auth()->user()->id)->get();

        // if (isset($request->q)) {
        //     $model = $model->where('question', 'like', '%' . $request->q . '%');
        // }


        return view('manager.appoinment.index', [
            'pageTitle' => 'Appoinments',
            'items'=> $model,])->render();
    }

    public function edit(Request $request,$id)
    {
        $models = Appointment::find($id);
        $models->status ='Confirmed';
        $models->update();

        $patiant = new Patiant();
        $patiant->user_id = $models->user_id;
        $patiant->doctor_id =Auth()->user()->id;
        $patiant->allow_access = false;
        $patiant->is_blocked = false;
        $patiant->save();

        $model = Appointment::where('doctor_id',Auth()->user()->id)->get();

        // if (isset($request->q)) {
        //     $model = $model->where('question', 'like', '%' . $request->q . '%');
        // }


        return view('manager.appoinment.index', [
            'pageTitle' => 'Appoinments',
            'items'=> $model,])->render();
    }

    public function destroy($id)
    {
        $model = Appointment::find($id);
        $model->delete();
        return redirect()->back()->with('success', 'Successfully Deleted');
        }

}
