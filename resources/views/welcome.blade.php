@extends('app')

@section('body')
<center><h1>All Employee</h1></center>
<div class="mb-3 float-end">
    <a href="/employee/create" class="btn btn-primary"> create</a>
</div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Address</th>
        <th scope="col">Created_at</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($employees as $employee)
            <tr>
                <th scope="row">{{$employee->id}}</th>
                <td>{{$employee->name}}</td>
                <td>{{$employee->address}}</td>
                <td>{{$employee->created_at}}</td>
                <td> 
                    <div class="btn-toolbar" role="toolbar">
                        <div class="btn-group" role="group">
                            <a href="{{asset('/employee/'.$employee->id)}}" class="btn btn-warning"> Show </a>

                            <a href="{{asset('/employee/'.$employee->id.'/edit')}}" class="btn btn-primary"> Edit </a>
                            <form action="{{asset('/employee/'.$employee->id)}}" method="post">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-danger"> Delete </a>
                            </form>

                        </div>
                    </div>
                </td>
               
            </tr>   
        @endforeach
    </tbody>
  </table>
  {{$employees->links()}}   
    
@endsection