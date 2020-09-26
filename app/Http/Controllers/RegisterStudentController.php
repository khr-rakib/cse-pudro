<?php

namespace App\Http\Controllers;

use App\RegisterStudent;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Database\Eloquent\FactoryBuilder;
use Illuminate\Http\Request;

class RegisterStudentController extends Controller
{
    public function admissionFormSubmit(Request $request){
        $request->validate([
            'faculty'                       => 'required',
            'department'                    => 'required',
            'program'                       => 'required',
            'student_name'                  => 'required',
            'student_phone_number'          => 'required',
            'student_email'                 => 'required',
            'student_nid'                   => 'required',
            'student_date_of_birth'         => 'required',
            'student_admission_date'        => 'required',
            'student_address_village'       => 'required',
            'student_address_post_office'   => 'required',
            'student_address_postal_code'   => 'required',
            'student_address_country'       => 'required',
            'division'                      => 'required',
            'city'                          => 'required',
            'upazila'                       => 'required',
            'payment_method'                => 'required',
            'amount'                        => 'required',
            'transaction_id'                => 'required'

        ]);

        $student = new RegisterStudent();

        if($request->file('student_picture')) {
            $fileName = $request->student_picture->getClientOriginalName();
            $request->student_picture->storeAs('images', $fileName, 'public');
        } else {
            $fileName = 'default.png';
        }

        $student->faculty                       = $request->faculty;
        $student->department                    = $request->department;
        $student->program                       = $request->program ;
        $student->student_id_number             = $request->student_id_number ;
        $student->student_name                  = $request->student_name ;
        $student->student_phone_number          = $request->student_phone_number ;
        $student->student_email                 = $request->student_email ;
        $student->student_nid                   = $request->student_nid ;
        $student->student_date_of_birth         = $request->student_date_of_birth ;
        $student->blood_group                   = $request->blood_group ;
        $student->student_religion              = $request->student_religion ;
        $student->student_gender                = $request->student_gender ;
        $student->student_admission_date        = $request->student_admission_date ;
        $student->student_marital_status        = $request->student_marital_status ;
        $student->student_picture               = $fileName;
        $student->student_address_village       = $request->student_address_village ;
        $student->student_address_post_office   = $request->student_address_post_office ;
        $student->student_address_postal_code   = $request->student_address_postal_code ;
        $student->student_address_country       = $request->student_address_country ;
        $student->division                      = $request->division ;
        $student->city                          = $request->city ;
        $student->upazila                       = $request->upazila ;
        $student->payment_method                = $request->payment_method;
        $student->amount                        = $request->amount ;
        $student->transaction_id                = $request->transaction_id ;

        $student->save();
        Toastr::success("Registration successfull. ", "Success");
        return redirect()->back();

    }
}

