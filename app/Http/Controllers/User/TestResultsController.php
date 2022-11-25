<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestResultsController extends Controller
{
    public function index(Request $request)
    {
        // $model = Faq::query();

        // if (isset($request->q)) {
        //     $model = $model->where('question', 'like', '%' . $request->q . '%');
        // }


        return view('user.results.index', [
            'pageTitle' => 'FAQ'])->render();
    }
}
