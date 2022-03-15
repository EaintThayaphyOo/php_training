@extends('students.layout')
   
@section('content')

<div class="row mt-3">
    <div class="col-md-8">
        <div class="float-left">
            <h2>Edit Student</h2>
        </div>
    </div>

    <div class="col-md-4">
        <div class="float-right">
            <a class="btn btn-outline-primary" href="{{ route('student.index') }}">Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('student.update',$student->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{ $student->name }}">
    </div>

    <div class="form-group">
        <label for="address">Address:</label>
        <textarea class="form-control" id="address" name="address" placeholder="Address">{{ $student->address }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection