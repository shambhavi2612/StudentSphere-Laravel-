@extends('layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h2>Teachers</h2>
                </div>
                <div class="card-body">
                    <a href="{{ url('/teachers/create') }}" class="btn btn-success btn-sm" title="Add New Teacher">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New
                    </a>
                    <br/>
                    <br/>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>FirstName</th>
                                    <th>LastName</th>
                                    <th>DateOfBirth</th>
                                    <th>Address</th>
                                    <th>MobileNumber</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($teachers as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->Firstname }}</td>
                                    <td>{{ $item->Lastname }}</td>
                                    <td>{{ $item->DateOfBirth }}</td>
                                    <td>{{ $item->Address }}</td>
                                    <td>{{ $item->Mobilenumber }}</td>
                                    <td class="actions">
                                        <a href="{{ url('/teachers/' . $item->id) }}" title="View Teacher">
                                            <button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button>
                                        </a>
                                        <a href="{{ url('/teachers/' . $item->id . '/edit') }}" title="Edit Teacher">
                                            <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button>
                                        </a>
                                        <form method="POST" action="{{ url('/teachers' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Teacher" onclick="return confirm(&quot;Confirm delete?&quot;)">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
