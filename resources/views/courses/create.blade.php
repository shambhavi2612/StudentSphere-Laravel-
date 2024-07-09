@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">Courses Page</div>
    <div class="card-body">
        <form action="{{ url('courses') }}" method="post">
            {!! csrf_field() !!}
            <label>Name</label></br>
            <input type="text" name="Name" id="Name" class="form-control"></br>

            <label>Syllabus</label></br>
            <input type="text" name="Syllabus" id="Syllabus" class="form-control"></br>
            
            <label>Duration</label></br>
            <input type="text" name="Duration" id="Duration" class="form-control"></br>
            
            <input type="submit" value="Save" class="btn btn-success"></br>
        </form>
    </div>
</div>

@stop
