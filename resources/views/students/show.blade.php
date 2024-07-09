@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Students Page</div>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">Firstname: {{ $students->Firstname }}</h5>
            <p class="card-text">Lastname: {{ $students->Lastname }}</p>
            <p class="card-text">DateOfBirth: {{ $students->DateOfBirth }}</p>
            <p class="card-text">Address: {{ $students->Address }}</p>
            <p class="card-text">Mobilenumber: {{ $students->Mobilenumber }}</p>
        </div>

    </br>
    </div>
</div>
@endsection