@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div style="display: flex; margin: 30px 0;">
                <div class="col-md-8" style="margin: 0 auto;">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Application For Certificate & Transcript</h2>
                        </div>
                        <div class="panel-body">
                            <form action="{{ route('applicationForm') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="applicationFile" >Upload File</label>
                                    <input accept=".pdf" class="form-control" type="file" id="applicationFile" name="applicationFile">
                                    <small class="text-center d-block">file type should be pdf</small>
                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Submit File</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

