<?php

namespace App\Http\Controllers\Admin;

use App\Doctor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notifications\UserAddedNotification;
use App\User;
use Illuminate\Support\Facades\Notification;

class DoctorController extends Controller
{
    public function index(Request $request)
    {
        // $model = Faq::query();

        // if (isset($request->q)) {
        //     $model = $model->where('question', 'like', '%' . $request->q . '%');
        // }
     $model = User::where('role_id','2')->get();

     return view('admin.doctor.index', [
            'pageTitle' => 'FAQ',
            'items'=> $model,])->render();
    }

    public function create()
    {
        $entity = new User();
        return view('admin.doctor.create', [
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
        $user->role_id = 2;
        $user->save();

        $doctor = new Doctor();
        $doctor->title =  $request->title;
        $doctor->user_id =$user->id;
        $doctor->medical_id = $request->register_id;
        $doctor->mobile_no = $request->mno;
        $doctor->hospital = $request->hospital;
        $doctor->save();

        $email = [
            'greeting' => 'Hi '.$user->name.',',
            'body' => 'You have Added To HELATH CARE APP as a Doctor. Please log into our website to connect with your patients.',
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

        return view('admin.doctor.edit', $data);
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
        $user->role_id = 2;
        $user->update();

        $doctor = Doctor::where('user_id',$id)->first();
        $doctor->title =  $request->title;
        $doctor->user_id =$user->id;
        $doctor->medical_id = $request->register_id;
        $doctor->mobile_no = $request->mno;
        $doctor->hospital = $request->hospital;
        $doctor->update();


        return redirect()->back()->with('success', 'Successfully Saved');

    }

    public function show($id)
    {
        $report = User::find($id);
        return view('admin.doctor.show', [
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
