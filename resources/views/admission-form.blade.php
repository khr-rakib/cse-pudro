@extends('layouts.app')
@section('content')
    <style>
        .alert-blue{
            background: #28a745;
            color: white;
        }
    </style>

    <div class="col-md-12 ">
        <div class="panel panel-default pt-5">
            <div class="panel-heading">
                <h3 class="text-center">Admission Form</h3>
            </div>
            <div class="panel-body">
                <form action="{{ route('admission-form') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-blue">
                                ACADEMIC INFORMATION
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="faculty">Faculty *</label>
                                <select class="form-control" id="faculty" name="faculty" required="">
                                    <option value="" > --- Select ---</option>
                                    <option value="Business Studies">Business Studies</option>
                                    <option value="Science Engineering">Science Engineering</option>
                                    <option value="Humanities Social Science">Humanities Social Science</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="department">Department *</label>
                                <select class="form-control" id="department" name="department" required="">
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="program">Program *</label>
                                <select class="form-control" id="program" name="program" required="">
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-blue">
                                STUDENT INFORMATION
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="student_id_number">Student's ID *</label>
                                <input type="text" class="form-control" id="student_id_number" name="student_id_number" value="N/A" autocomplete="off" readonly="" required="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="student_name">Student's Name *</label>
                                <input type="text" class="form-control" id="student_name" name="student_name" autocomplete="off" required="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="student_phone_number">Student's Phone Number *</label>
                                <input type="text" class="form-control" id="student_phone_number" name="student_phone_number" autocomplete="off" required="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="student_email">Student's Email *</label>
                                <input type="email" class="form-control" id="student_email" name="student_email" autocomplete="off" required="">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="student_nid">Student's NID / Birth Certificate ID *</label>
                                <input type="text" class="form-control" id="student_nid" name="student_nid" required="">
                        </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="student_date_of_birth">Date of Birth</label>
                                <input type="date" class="form-control" id="student_date_of_birth" name="student_date_of_birth" autocomplete="off" required="">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="blood_group">Blood Group</label>
                                <select class="form-control" id="blood_group" name="blood_group">
                                    <option value="0"> --- Select ---</option>
                                    <option value="N/A">N/A </option>
                                    <option value="A+">A+</option>
                                    <option value="A">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B">B-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="student_religion">Religion *</label>
                                <select class="form-control " id="student_religion" name="student_religion">
                                    <option > --- Select ---</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Hinduism">Hinduism</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="student_gender">Gender *</label>
                                <select class="form-control " id="student_gender" name="student_gender">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="student_admission_date">Admission Date *</label>
                                <input type="date" class="form-control" id="student_admission_date" name="student_admission_date" autocomplete="off" required="">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="student_marital_status">Marital Status</label>
                                <select class="form-control " id="student_marital_status" name="student_marital_status">
                                    <option value="Married">Married</option>
                                    <option value="UnMarried">UnMarried</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="student_picture">Student's Picture</label>
                                <input type="file" name="student_picture" id="student_picture">
                            </div>
                        </div>

                    </div>


                    <div class="row">
                            <div class="col-md-12">
                                <div class="alert alert-blue">
                                    ADDRESS INFORMATION
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <label for="student_address_village">Village *</label>
                                <input type="text" class="form-control form-control-sm bd-danger" id="student_address_village" name="student_address_village" autocomplete="off" required="">
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <label for="student_address_post_office">Post Office *</label>
                                <input type="text" class="form-control form-control-sm bd-danger" id="student_address_post_office" name="student_address_post_office" autocomplete="off" required="">
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <label for="student_address_postal_code">Postal Code *</label>
                                <input type="text" class="form-control form-control-sm bd-danger" id="student_address_postal_code" name="student_address_postal_code" autocomplete="off" required="">
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <label for="student_address_up">Union Parishad *</label>
                                <input type="text" class="form-control form-control-sm bd-danger" id="student_address_up" name="student_address_up" autocomplete="off" required="">
                            </div>

                        <div class="col-md-12">
                            <br>
                        </div>
                            <div class="col-md-3 col-sm-12">
                                <label for="student_address_country">Country *</label>
                                <select class="form-control form-control-sm bd-danger" id="country" name="student_address_country" required="">
                                    <option value=""> --- Select ---</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                </select>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <label for="label">Division *</label>
                                <input class="form-control" type="text" id="division" name="division" />
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <label for="label">City *</label>
                                <input class="form-control" type="text" id="city" name="city" />
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <label for="label">Upazila *</label>
                                <input class="form-control" type="text" id="upazila" name="upazila" />
                            </div>
                    </div>

                    <div class="row" style="margin-top: 20px;">
                        <div class="col-md-12">
                            <div class="alert alert-blue">
                                PAYMENT INFORMATION
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <label for="payment_method">Payment Method *</label>
                            <select class="form-control form-control-sm bd-danger" id="payment_method" name="payment_method" required="">
                                <option value=""> --- Select ---</option>
                                <option value="Bkash">Bkash</option>
                                <option value="Rocket">Rocket</option>
                            </select>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <label for="account_number">Account Number *</label>
                            <input type="text" class="form-control" id="account_number" name="account_number" value="01xxx-xxxxxx" autocomplete="off" readonly="" required="">
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <label for="amount">Amount *</label>
                            <input type="text" class="form-control form-control-sm bd-danger" id="amount" name="amount" autocomplete="off" required="">
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <label for="transaction_id">Transaction ID *</label>
                            <input type="text" class="form-control form-control-sm bd-danger" id="transaction_id" name="transaction_id" autocomplete="off" required="">
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-success btn-block">SUBMIT APPLICATION</button>
                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>

    <script>
        const faculty = document.getElementById('faculty');
        const department = document.getElementById('department');
        const program = document.getElementById('program');

        // handle faculty function
        function handleFaculty(){
            const valueOfFaculty = faculty.value;

            if(valueOfFaculty === 'Business Studies'){
                department.innerHTML = `
                    <option value=""> --- Select --- </option>
                    <option value="Business Administration">Business Administration</option>
                `;
            } else if (valueOfFaculty === 'Science Engineering'){
                department.innerHTML = `
                    <option value=""> --- Select --- </option>
                    <option value="Computer Science Engineering">Computer Science Engineering</option>
                    <option value="Electrical Electronic Engineering">Electrical Electronic Engineering</option>
                    <option value="Civil Engineering">Civil Engineering</option>
                    <option value="Public Health">Public Health</option>
                `;
            } else if(valueOfFaculty === 'Humanities Social Science'){
                department.innerHTML = `
                    <option value=""> --- Select --- </option>
                    <option value="Islamic Studies">Islamic Studies</option>
                    <option value="English">English</option>
                    <option value="Education">Education</option>
                    <option value="Law">Law</option>
                `;
            }
        }

        // handle department
        function handleDepartment(){
            const valueOfDepartment = department.value;

            console.log(valueOfDepartment)

            if(valueOfDepartment === 'Business Administration')
            {
                program.innerHTML = `
                    <option value=""> --- Select --- </option>
                    <option value="BBA">BBA</option>
                    <option value="MBA-1 Year">MBA-1 Year</option>
                    <option value="MBA-2 Years">MBA-2 Years</option>
                    <option value="EMBA">EMBA</option>
                `;
            } else if (valueOfDepartment === 'Computer Science Engineering')
            {
                program.innerHTML = `
                    <option value=""> --- Select --- </option>
                    <option value="B.Sc. in CSE (HSC)">B.Sc. in CSE (HSC)</option>
                    <option value="B.Sc. in CSE (Diploma)">B.Sc. in CSE (Diploma)</option>
                `;
            } else if (valueOfDepartment === 'Electrical Electronic Engineering')
            {
                program.innerHTML = `
                    <option value=""> --- Select --- </option>
                    <option value="B.Sc. in EEE (HSC)">B.Sc. in EEE (HSC)</option>
                    <option value="B.Sc. in EEE (Diploma)">B.Sc. in EEE (Diploma)</option>
                `;
            } else if(valueOfDepartment === 'Civil Engineering')
            {
                program.innerHTML = `
                    <option value=""> --- Select --- </option>
                    <option value="B.Sc. in EEE (HSC)">B.Sc. in Civil Engineering (HSC)</option>
                    <option value="B.Sc. in EEE (Diploma)">B.Sc. in Civil Engineering (Diploma)</option>
                `;
            } else if (valueOfDepartment === 'Public Health'){
                program.innerHTML = `
                    <option value=""> --- Select --- </option>
                    <option value="MPH">MPH</option>
                `;
            } else if (valueOfDepartment === 'Islamic Studies'){
                program.innerHTML = `
                    <option value=""> --- Select --- </option>
                    <option value="BA Hons. in Islamic Studies">BA Hons. in Islamic Studies</option>
                    <option value="MA (Islamic Studies) 2 Years">MA (Islamic Studies) 2 Years</option>
                    <option value="MA (Islamic Studies) 1 Year">MA (Islamic Studies) 1 Year</option>
                `;
            } else if (valueOfDepartment === 'English'){
                program.innerHTML = `
                    <option value=""> --- Select --- </option>
                    <option value="B.A Hons. in English">B.A Hons. in English</option>
                    <option value="M.A in English">M.A in English</option>
                `;
            } else if (valueOfDepartment === 'Education'){
                program.innerHTML = `
                    <option value=""> --- Select --- </option>
                    <option value="B. Ed">B. Ed</option>
                    <option value="M. Ed">M. Ed</option>
                `;
            }else if (valueOfDepartment === 'Law'){
                program.innerHTML = `
                    <option value=""> --- Select --- </option>
                    <option value="LL.B (HSC)">LL.B (HSC)</option>
                    <option value="LL.B Weekend">LL.B Weekend</option>
                    <option value="LL.M - 1 Year">LL.M - 1 Year</option>
                    <option value="LL.M - 2 Years">LL.M - 2 Years</option>
                `;
            }

        }

        // event listeners
        faculty.addEventListener('change', handleFaculty)
        department.addEventListener('change', handleDepartment)

        window.onload = () => {
            function generateID() {
                const student_id_number = document.getElementById('student_id_number')
                const number = Math.floor(Math.random() * 1000000000)
                student_id_number.value = number
            }
            generateID();
        }

    </script>
@endsection
