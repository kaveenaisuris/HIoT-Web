<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    if(Auth::check() && Auth::user()->role_id == 1){
            return redirect('admin/dashboard');
        } elseif(Auth::check() && Auth::user()->role_id == 3){
            return redirect('user/dashboard');
        } elseif(Auth::check() && Auth::user()->role_id == 2){
            return redirect('manager/dashboard');
        }  else{
        	return redirect('login');
        }
});

Auth::routes();

Route::resource('profile', 'Manager\DoctorprofilrController');
Route::resource('patiant', 'Manager\PatientController');
Route::resource('dappoinment', 'Manager\AppoinmentController');

Route::resource('patiantuser', 'Admin\UserController');
Route::resource('doctor', 'Admin\DoctorController');

Route::resource('result', 'User\TestResultsController');
Route::resource('doctorview', 'User\ViewDoctorController');
Route::resource('confirmAppoinment', 'User\AppoinmentController');
Route::resource('confirmdoctors', 'User\ConfirmDoctorController');
Route::get('confirmdoctors/{id}/allow','User\ConfirmDoctorController@allow');
Route::get('confirmdoctors/{id}/remove','User\ConfirmDoctorController@remove');
Route::get('confirmdoctors/{id}/block','User\ConfirmDoctorController@block');
Route::get('confirmdoctors/{id}/unblock','User\ConfirmDoctorController@unblock');

Route::get('get-firebase-data', [FirebaseController::class, 'index'])->name('firebase.index');

Route::group(['as'=>'admin.','prefix' => 'admin','namespace'=>'Admin','middleware'=>['auth','admin']], function () {
		Route::get('dashboard', 'DashboardController@index')->name('dashboard');

});

Route::group(['as'=>'doctor.','prefix' => 'manager','namespace'=>'Manager','middleware'=>['auth','manager']], function () {
		Route::get('dashboard', 'DashboardController@index')->name('dashboard');

});

Route::group(['as'=>'abc.','prefix' => 'user','namespace'=>'User','middleware'=>['auth','user']], function () {
		Route::get('dashboard', 'DashboardController@index')->name('dashboard');
});
