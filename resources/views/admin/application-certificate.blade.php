@extends('admin.master')

@section('content')
<div class="container">
    <div class="row my-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Admission List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">File</th>

                                <th scope="col" class="text-center">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($data as $item)
                                    <tr>
                                        <th scope="row">{{ $i++ }}</th>
                                        <td>{{$item->user->name}}</td>
                                        <td>
                                            <a href="{{ asset('public/storage/application/'.$item->applicationFile) }}">
                                                <img width="100" src="{{ asset('public/backend/downlod.png') }}" alt="">
                                            </a>
                                        </td>


                                        <td class="text-center">

                                            <a onclick="return confirm('Are you sure to delete?')" href="{{ route('admin.application.delete',$item->id) }}" class="btn btn-danger btn-sm">
                                                <i class="fa fa-check"></i>
                                                 Delete
                                            </a>

                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
