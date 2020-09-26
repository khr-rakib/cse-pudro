@extends('user.master')
@section('content')



    <div class="container">
        <div class="row my-5 py-5">
            <div class="col-md-8 offset-md-2">
                    <div class="container text-center pt-3">
                        <h3 class="mb-3">Name of Subjects </h3>
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('user.subject') }}" method="POST">
                                    @csrf
                                    <table class="table table-striped table-bordered">
                                        <tbody>
                                            <tr>
                                                <td><input value="Professional Programming C# .NET" type="checkbox" name="subjects[]" id="professionalProgramming"></td>
                                                <td><label for="professionalProgramming">Professional Programming C# .NET</label></td>                                       </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input value="Data Structure" type="checkbox" name="subjects[]" id="dataStructure">
                                                </td>
                                                <td><label for="dataStructure">Data Structure</label></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input value="Digital Signal Processing" type="checkbox" name="subjects[]" id="digitalSingnal">
                                                </td>
                                                <td>
                                                    <label for="digitalSingnal">Digital Signal Processing</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input value="Wireless Networking" value="Wireless Networking" type="checkbox" name="subjects[]" id="wirelessNetworking"></td>
                                                <td><label for="wirelessNetworking">Wireless Networking</label></td>
                                            </tr>
                                            <tr>
                                                <td><input value="Computer Fundamental" type="checkbox" name="subjects[]" id="compurterFundamental"></td>
                                                <td><label for="compurterFundamental">Computer Fundamental</label></td>
                                            </tr>
                                            <tr>
                                                <td><input value="Database Management System" type="checkbox" name="subjects[]" id="dms"></td>
                                                <td><label for="dms">Database Management System</label></td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value="Digital System Design" name="subjects[]" id="digitalSysDesign"></td>
                                                <td><label for="digitalSysDesign">Digital System Design</label></td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value="Artificial Intelligence" name="subjects[]" id="ai"></td>
                                                <td><label for="ai">Artificial Intelligence</label></td>
                                            </tr>
                                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                            <tr>
                                                <td><input value="Data Communication" type="checkbox" name="subjects[]" id="dataCommunication"></td>
                                                <td><label for="dataCommunication">Data Communication</label></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <button class="btn btn-primary btn-block" type="submit"> Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </div>

    @endsection
