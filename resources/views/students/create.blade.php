@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">Students Page</div>
    <div class="card-body">
        <form action="{{ url('students') }}" method="post">
            {!! csrf_field() !!}
            <label>FirstName</label></br>
            <input type="text" name="Firstname" id="Firstname" class="form-control"></br>
            <label>LastName</label></br>
            <input type="text" name="Lastname" id="Lastname" class="form-control"></br>
            <label>DateOfBirth</label></br>
            <input type="date" name="DateOfBirth" id="DateOfBirth" class="form-control"></br>
            <label>Address</label></br>
            <input type="text" name="Address" id="Address" class="form-control"></br>
            <label>Mobilenumber</label></br>
            <input type="number" name="Mobilenumber" id="Mobilenumber" class="form-control"></br>
            <input type="submit" value="Save" class="btn btn-success"></br>
        </form>
    </div>
</div>

@stop
