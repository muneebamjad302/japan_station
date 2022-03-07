@extends('app')

@section('body')

<form action="{{asset('/employee/'.$employee->id)}}" method="POST">
    @csrf
    @method('PUT')
    <center><h1>Upadte Employee</h1></center>
    <div class="mb-3 mt-5 row">
        <label for="name" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="name" name="name" value="{{$employee->name}}">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="address" class="col-sm-2 col-form-label">Address</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="address" name="address" value="{{$employee->address}}">
        </div>
    </div>

    <div class="mb-3 row">
       <button type="submit" class="btn btn-primary"> Submit</button>
    </div>

</form>
    
    
@endsection