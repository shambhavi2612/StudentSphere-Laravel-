@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Edit Page</div>
    <div class="card-body">
        <form action="{{ url('courses/' . $course->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$course->id}}" id="id" />
            <label>Name</label></br>
            <input type="text" name="Name" id="Name" value="{{$course->Name}}" class="form-control"></br>

            <label>Syllabus</label></br>
            <input type="text" name="Syllabus" id="Syllabus" value="{{$course->Syllabus}}" class="form-control"></br>


            <label>Duration</label></br>
            <input type="text" name="Duration" id="Duration" value="{{$course->Duration}}" class="form-control"></br>
            
            <input type="submit" value="Update" class="btn btn-success"></br>
        </form>
    </div>
</div>
@stop
