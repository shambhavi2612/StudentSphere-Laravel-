@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Courses Page</div>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">Name: {{ $course->Name }}</h5>
            <p class="card-text">Syllabus: {{ $course->Syllabus }}</p>
            <p class="card-text">Duration: {{ $course->duration() }}</p>
            
        </div>

    </br>
    </div>
</div>
@endsection