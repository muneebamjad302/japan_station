@extends('app')

@section('body')

    <center><h1>Employee Details</h1></center>
    <div class="mb-3 mt-5 row">
        <label for="name" class="col-sm-2 col-form-label">Name:</label>
        <div class="col-sm-10">
        <input type="text" readonly class="form-control-plaintext" value="{{$employee->name}}">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="address" class="col-sm-2 col-form-label">Address:</label>
        <div class="col-sm-10">
        <input type="text" readonly class="form-control-plaintext" value="{{$employee->address}}">
        </div>
    </div>

    <div class="mb-3 row">
        <label for="address" class="col-sm-2 col-form-label">Created_at:</label>
        <div class="col-sm-10">
        <input type="text" readonly class="form-control-plaintext" value="{{$employee->created_at}}">
        </div>
    </div>

@endsection