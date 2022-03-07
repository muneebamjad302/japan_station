@extends('app')

@section('body')

<form action="{{asset('/employee')}}" method="POST">
    @csrf
    <center><h1>Add Employee</h1></center>
    <div class="mb-3 mt-5 row">
        <label for="name" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
        <input type="text" required  class="form-control" id="name" name="name">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="address" class="col-sm-2 col-form-label">Address</label>
        <div class="col-sm-10">
        <input type="text" required class="form-control" id="address" name="address">
        </div>
    </div>

    <div class="mb-3 row">
       <button type="submit" class="btn btn-primary"> Submit</button>
    </div>

</form>
    
    
@endsection