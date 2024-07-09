@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Teachers Page</div>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">Firstname: {{ $teachers->Firstname }}</h5>
            <p class="card-text">Lastname: {{ $teachers->Lastname }}</p>
            <p class="card-text">DateOfBirth: {{ $teachers->DateOfBirth }}</p>
            <p class="card-text">Address: {{ $teachers->Address }}</p>
            <p class="card-text">Mobilenumber: {{ $teachers->Mobilenumber }}</p>
        </div>
    </br>
    </div>
</div>
@endsection
