@extends('customer.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 mt-5 mb-5">
        <a class="btn btn-light float-left mr-5" href="{{ route('customer.index') }}"> <i class="fas fa-arrow-left"></i> Back</a>
        <h2>Add New Customer</h2>      
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('customer.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Gender:</strong>
                <br>
                <label><input type="radio" name="gender" value="Male" checked> Male</label>
                <label><input type="radio" name="gender" value="Female"> Female</label>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Address:</strong>
                <textarea class="form-control" style="height:150px" name="address" placeholder="Address"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <a class="btn btn-light float-left" href="{{ route('customer.index') }}"> <i class="fas fa-arrow-left"></i> Back</a>
            <button type="submit" class="btn btn-success float-right">Submit</button>
        </div>
    </div>
   
</form>
@endsection