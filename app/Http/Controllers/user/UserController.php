<?php

namespace App\Http\Controllers\user;

use App\AdmissionCertificate;
use App\Http\Controllers\Controller;
use App\Subject;
use App\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\FuncCall;

class UserController extends Controller
{
    public function dashboard(){
        return view('user.dashboard');
    }
    public function applicationForCertificateForm(){
        return view('user.applicatinFormCertificate');
    }

    public function applicationForCertificate(Request $request){

        $request->validate([
            'applicationFile' => 'required|mimes:pdf'
        ]);

        if($request->file('applicationFile')) {
            $fileName = $request->applicationFile->getClientOriginalName();
            $request->applicationFile->storeAs('application', $fileName, 'public');
        } else {
            $fileName = 'default.pdf';
        }

        $data = new AdmissionCertificate();
        $data->applicationFile = $fileName;
        $data->user_id = $request->user_id;
        $data->save();
        Toastr::success("Your file has been submitted. ", "Success");
        return redirect('/');
    }

    public function subject(Request $request){
        $request->validate([
            'subjects' => 'required'
        ]);

        $subject = new Subject();
        $arrayToString = implode(' , ', $request->subjects);

        $subject->subjects = $arrayToString;
        $subject->user_id = $request->user_id;

        $subject->save();
        Toastr::success("Your data has been submitted. ", "Success");
        return redirect()->back();
    }
}
