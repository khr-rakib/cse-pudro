<?php

namespace App\Http\Controllers\admin;

use App\AdmissionCertificate;
use App\Http\Controllers\Controller;
use App\Http\Controllers\RegisterStudentController;
use App\Notifications\RegisterNotification;
use App\RegisterStudent;
use App\Subject;
use App\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;
use PhpParser\Node\Expr\FuncCall;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }

    public function admissionList(){
        $data = RegisterStudent::latest()->get();
        return view('admin.admission-list', compact('data'));
    }

    public function adminssionView($id){
        $data = RegisterStudent::find($id);
        return view('admin.admission-view', compact('data'));
    }

    public function admissionConfirm($id){

        $data = RegisterStudent::find($id);
        User::create([
            'role_id'   => 2,
            'reg_id'    => $data->student_id_number,
            'name'  => $data->student_name,
            'email' => $data->student_email,
            'password' => Hash::make('password'),
        ]);

        Notification::route( 'mail', $data->student_email)->notify(new RegisterNotification($data));
        Toastr::success('Student Registration Successfull', 'Success');
        return back();
    }

    public function applicationCertificate(){
        $dat = new AdmissionCertificate();
        $data = $dat->all();

        return view('admin.application-certificate', compact('data'));
    }

    public function subjects(){
        $subjects = new Subject();
        $data = $subjects->latest()->get();

        return view('admin.subjects', compact('data'));
    }

    public function applicationDelete($id) {
        AdmissionCertificate::find($id)->delete();
        Toastr::success('Delete Successfull', 'Success');
        return back();
    }
}
