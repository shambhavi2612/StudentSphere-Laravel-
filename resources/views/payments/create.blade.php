@extends('layout')

@section('content')

<div class="card">
    <div class="card-header">Payment</div>
    <div class="card-body">
        <form action="{{ route('payments.store') }}" method="post">
            @csrf <!-- Use @csrf instead of {!! csrf_field() !!} for Laravel 7+ -->

            <label>Select Enrollment</label><br>
            <select name="enrollment_id" id="enrollment_id" class="form-control">
                @foreach($enrollments as $id => $enrollno)
                    <option value="{{ $id }}">{{ $enrollno }}</option>
                @endforeach
            </select><br>

            <label>Paid Date</label><br>
            <input type="date" name="paid_date" id="paid_date" class="form-control" required><br>

            <label>Amount</label><br>
            <input type="number" step="0.01" name="amount" id="amount" class="form-control" required><br>

            <input type="submit" value="Save" class="btn btn-success"><br>
        </form>
    </div>
</div>

@endsection
