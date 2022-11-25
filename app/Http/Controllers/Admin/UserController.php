<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notifications\UserAddedNotification;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;

class UserController extends Controller
{
    public function index(Request $request)
    {
        // $model = Faq::query();

        // if (isset($request->q)) {
        //     $model = $model->where('question', 'like', '%' . $request->q . '%');
        // }
     $model = User::where('role_id','3')->get();

        return view('admin.user.index', [
            'pageTitle' => 'FAQ',
            'items'=> $model,])->render();
    }

    public function create()
    {
        $entity = new User();
        return view('admin.user.create', [
            'entity' => $entity,
            'pageTitle' => 'Create Categories',
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'fname' => 'required'
        ]);
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*_";
        $password = substr( str_shuffle( $chars ), 0, 8 );
        $user = new User();
        $user->first_name = $request->fname;
        $user->last_name = $request->lname;
        $user->password= bcrypt($password);
        $user->name = $request->fname .' '. $request->lname;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->postal_code = $request->pcode;
        $user->country = $request->country;
        $user->role_id = 3;
        $user->save();

        $email = [
            'greeting' => 'Hi '.$user->name.',',
            'body' => 'You have Added To HEALTH CARE APP as a USER. Please log into the website for find your Medical Recodes',
            'full_name'=>'Full Name- ' .$request->name,
            'email'=>'Enail- ' .$request->email,
            'password'=>'Password-' .$password,
            'mobile_number'=>'Mobile- Number-' .$request->phone,
            'text'=>'Thank you'
        ];

        Notification::send($user, new UserAddedNotification($email));
        return redirect()->back()->with('success');
    }

    public function edit($id)
    {
        $catName = User::find($id);

        $data = [
            'pageTitle' => 'Edit Tutorial',
            'entity' => $catName,
        ];

        return view('admin.user.edit', $data);
    }

    public function update( $id, Request $request)
    {

        $user = User::find($id);
        $user->first_name = $request->fname;
        $user->last_name = $request->lname;
        $user->name = $request->fname .' '. $request->lname;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->postal_code = $request->pcode;
        $user->country = $request->country;
        $user->role_id = 3;
        $user->update();



        return redirect()->back()->with('success', 'Successfully Saved');

    }

    public function show($id)
    {
        $report = User::find($id);
        return view('admin.user.show', [
            'pageTitle' => 'History',
            'entity' => $report,
        ])->render();
    }

    public function destroy($id)
    {
        $time = User::find($id);
        $time->delete();

        return redirect()->back()->with('success', 'Successfully Deleted');
    }

}
