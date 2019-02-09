@extends('customer.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 mt-5 mb-5">
            <a class="btn btn-light float-left mr-5" href="{{ route('customer.index') }}"> <i class="fas fa-arrow-left"></i> Back</a>
            <h2>Edit Customers</h2>
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
  
    <form action="{{ route('customer.update',$customer->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $customer->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Gender:</strong>
                <br>
                @if ($customer->gender == 'Male')
                    <label class="mr-2"><input type="radio" name="gender" value="Male" checked> Male</label>
                    <label><input type="radio" name="gender" value="Female"> Female</label>
                @else
                    <label class="mr-2"><input type="radio" name="gender" value="Male"> Male</label>
                    <label><input type="radio" name="gender" value="Female" checked> Female</label>
                @endif
            </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Detail:</strong>
                    <textarea class="form-control" style="height:150px" name="address">{{ $customer->address }}</textarea>
                </div>
            </div>
             <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-success float-right">Submit</button>
            </div>
        </div>
   
    </form>
@endsection