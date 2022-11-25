<?php

namespace App\Http\Controllers\Manager;

use App\Appointment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Patiant;

class PatientController extends Controller
{
    public function index(Request $request)
    {
        $model = Patiant::where('doctor_id',Auth()->user()->id)->get();

        // if (isset($request->q)) {
        //     $model = $model->where('question', 'like', '%' . $request->q . '%');
        // }


        return view('manager.patient.index', [
            'pageTitle' => 'Patients',
            'items'=> $model,])->render();
    }
}
