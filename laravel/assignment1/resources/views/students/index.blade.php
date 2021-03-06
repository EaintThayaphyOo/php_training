@extends('students.layout')

@section('content')

<div class="row mt-3">
    <div class="col-md-8">
        <div class="float-left">
            <h2>Students List</h2>
        </div>
    </div>

    <div class="col-md-4">
        <div class="float-right">
            <a class="btn btn-outline-success" href="{{ route('student.create') }}"> Create New student</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table">
    <thead class="thead-dark">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($students as $student)
        <tr>
            <td>{{ $loop->index + 1 }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->address }}</td>
            <td>
                <form action="{{ route('student.destroy',$student->id) }}" method="POST">
                    <a class="btn btn-outline-info btn-sm" href="{{ route('student.show',$student->id) }}">Show</a>
                    <a class="btn btn-outline-primary btn-sm" href="{{ route('student.edit',$student->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-outline-danger btn-sm">Delete</button>
                </form>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>

@endsection