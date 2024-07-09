@extends('layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Enrollment</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('enrollments.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="enroll_no">Enrollment Number</label>
                                <input type="text" name="enroll_no" id="enroll_no" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="batch_id">Batch</label>
                                <select name="batch_id" id="batch_id" class="form-control" required>
                                    @foreach($batches as $batchId => $batchName)
                                        <option value="{{ $batchId }}">{{ $batchName }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="student_id">Student</label>
                                <select name="student_id" id="student_id" class="form-control" required>
                                    @foreach($students as $studentId => $studentName)
                                        <option value="{{ $studentId }}">{{ $studentName }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="join_date">Join Date</label>
                                <input type="date" name="join_date" id="join_date" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="fee">Fee</label>
                                <input type="number" name="fee" id="fee" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
