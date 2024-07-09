@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Edit Page</div>
    <div class="card-body">
        <form action="{{ url('teachers/' . $teachers->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$teachers->id}}" id="id" />
            <label>FirstName</label></br>
            <input type="text" name="Firstname" id="Firstname" value="{{$teachers->Firstname}}" class="form-control"></br>

            <label>LastName</label></br>
            <input type="text" name="Lastname" id="Lastname" value="{{$teachers->Lastname}}" class="form-control"></br>

            <label>DateOfBirth</label></br>
            <input type="text" name="DateOfBirth" id="DateOfBirth" value="{{$teachers->DateOfBirth}}" class="form-control"></br>
            <label>Address</label></br>
            <input type="text" name="Address" id="Address" value="{{$teachers->Address}}" class="form-control"></br>
            <label>Mobilenumber</label></br>
            <input type="text" name="Mobilenumber" id="Mobilenumber" value="{{$teachers->Mobilenumber}}" class="form-control"></br>
            <input type="submit" value="Update" class="btn btn-success"></br>
        </form>
    </div>
</div>
@stop
