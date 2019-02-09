@extends('customer.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 mt-5 mb-5">
            <a class="btn btn-light float-left mr-5" href="{{ route('customer.index') }}"> <i class="fas fa-arrow-left"></i> Back</a>
            <h2> Show Customer</h2>
        </div>
    </div>
   
    <div class="border bg-light p-4 rounded">
        <a class="btn btn-success float-right mb-3" href="{{ route('customer.edit',$customer->id) }}" title="Edit"><i class="far fa-edit"></i></a>
        <div class="row ">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group txt-hover">
                    <strong>Name:</strong>
                    {{ $customer->name }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group txt-hover">
                    <strong>Gender:</strong>
                    {{ $customer->gender }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group txt-hover">
                    <strong>Address:</strong>
                    {{ $customer->address }}
                </div>
            </div>
        </div>
    </div>

@endsection