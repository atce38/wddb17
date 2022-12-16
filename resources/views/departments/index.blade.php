@extends('layouts.master')

@section('title')

{{ 'WDDB17 - Jameel Haider' }}
@endsection

@section('jameel')
<div class="container ">
    <div class="text-end">
        <a class="btn btn-info" href="{{ route('departments.create') }}">Create Department</a>
    </div>
    <div class="bg-warning text-center h5">
        Departments
    </div>
<table class="table table-striped table-inverse table-responsive">
    <thead class="thead-inverse">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($departments as $key=> $department)
            <tr>
                <td>{{ ++$key }}</td>
                <td>{{ $department->name }}</td>
                <td><a class="btn btn-primary" href="{{ route('departments.edit',['id'=>$department->id]) }}">Edit</a><a class="btn btn-danger" href="{{ route('departments.delete',['id'=>$department->id]) }}">Delete</a></td>
            </tr>
            @endforeach


        </tbody>
</table>
</div>

@endsection
