<?php

namespace App\Http\Controllers\User;

use App\Appointment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AppoinmentController extends Controller
{
    public function index(Request $request)
    {
        $model = Appointment::where('user_id',Auth()->user()->id)->get();

        // if (isset($request->q)) {
        //     $model = $model->where('question', 'like', '%' . $request->q . '%');
        // }


        return view('user.appoinment.index', [
            'pageTitle' => 'Appoinments',
            'items'=> $model,])->render();
    }

    public function show($id)
    {
        $report = Appointment::find($id);
        return view('user.appoinment.show', [
            'pageTitle' => 'Appoinments Details',
            'entity' => $report,
        ])->render();
    }

}
