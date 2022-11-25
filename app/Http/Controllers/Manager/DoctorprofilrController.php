<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DoctorprofilrController extends Controller
{
    public function index(Request $request)
    {
        // $model = Faq::query();

        // if (isset($request->q)) {
        //     $model = $model->where('question', 'like', '%' . $request->q . '%');
        // }


        return view('manager.profile.index', [
            'pageTitle' => 'FAQ'])->render();
    }
}
