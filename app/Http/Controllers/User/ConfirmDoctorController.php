<?php

namespace App\Http\Controllers\User;

use App\Doctor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Patiant;

class ConfirmDoctorController extends Controller
{
    public function index(Request $request)
    {
        $model = Patiant::where('user_id',Auth()->user()->id)->get();

        // if (isset($request->q)) {
        //     $model = $model->where('question', 'like', '%' . $request->q . '%');
        // }


        return view('user.access.index', [
            'pageTitle' => 'Doctors',
            'items'=> $model,])->render();
    }

    public function allow($id){
        $patiant = Patiant::find($id);

        $patiant->allow_access =true;
        $patiant->update();

        $model = Patiant::where('user_id',Auth()->user()->id)->get();

        // if (isset($request->q)) {
        //     $model = $model->where('question', 'like', '%' . $request->q . '%');
        // }


        return redirect()->back();
    }

    public function remove($id){
        $patiant = Patiant::find($id);

        $patiant->allow_access =false;
        $patiant->update();


        return redirect()->back();
    }

    public function block($id){
        $patiant = Patiant::find($id);

        $patiant->is_blocked =true;
        $patiant->update();


        return redirect()->back();
    }
    public function unblock($id){
        $patiant = Patiant::find($id);

        $patiant->is_blocked =false;
        $patiant->update();


        return redirect()->back();
    }
}
