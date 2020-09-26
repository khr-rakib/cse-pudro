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
                                    <th scope="col">Phone</th>
                                    <th scope="col">Payment Method</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Transaction ID</th>
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
                                            <td>{{$item->student_name}}</td>
                                            <td>{{$item->student_phone_number}}</td>
                                            <td>{{$item->payment_method}}</td>
                                            <td>{{$item->amount}}</td>
                                            <td>{{$item->transaction_id}}</td>

                                            <td class="text-center">
                                                <a href="{{ route('admin.admission.view',$item->id)}}" class="btn btn-success btn-sm">
                                                    <i class="fa fa-eye"></i>
                                                     View
                                                </a>
                                                @if($item->status == 0)
                                                <a href="{{ route('admin.admission.confirm',$item->id) }}" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-check"></i>
                                                     Admit
                                                </a>
                                                @endif

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
