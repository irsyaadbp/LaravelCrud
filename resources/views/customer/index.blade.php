@extends('customer.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 mt-5">
            <div class="mb-4">
                <h2>Laravel CRUD by Irsyaad</h2>
            </div>

            @if ($message = Session::get('success'))
		        <div class="alert alert-success mb-4">
		            <p>{{ $message }}</p>
		        </div>
		    @endif
            <div class="float-right mb-3">
                <a class="btn btn-primary" href="{{ route('customer.create') }}"><i class="fas fa-plus"></i> Add New</a>
            </div>
        </div>
    </div>
   
    <table class="table table-hover table-responsive-md">
        <thead>
        	<tr>
	            <th>No</th>
	            <th>Name</th>
	            <th>Gender</th>
	            <th>Address</th>
	            <th>Action</th>
	        </tr>
	    </thead>
	    <tbody>
	        @forelse ($customers as $data)
	        <tr>
	            <th>{{ ++$i }}</th>
	            <td>{{ $data->name }}</td>
	            <td>{{ $data->gender }}</td>
	            <td>{{ $data->address }}</td>
	            <td>
	                <form action="{{ route('customer.destroy',$data->id) }}" method="POST">
	   
	                    <a class="btn btn-info" href="{{ route('customer.show',$data->id) }}" title="Show"><i class="far fa-eye"></i></a>
	    
	                    <a class="btn btn-success" href="{{ route('customer.edit',$data->id) }}" title="Edit"><i class="far fa-edit"></i></a>
	   
	                    @csrf
	                    @method('DELETE')
	      
	                    <button type="submit" class="btn btn-danger" title="Delete"><i class="fas fa-trash-alt"></i></button>
	                </form>
	            </td>
	        </tr>
	        @empty
	        <tr>
	        	<td colspan="5" align="center" class="table-secondary" style="font-style: italic;">No Customer</td>
	        </tr>
	        @endforelse
	    </tbody>
    </table>
  
    {!! $customers->links() !!}
      
@endsection