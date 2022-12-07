@extends('layouts.master')

@section('title')

{{ 'WDDB17 - Jameel Haider' }}
@endsection

@section('jameel')
<div class="container ">
    <div class="text-end">
        <a class="btn btn-info" href="{{ route('emp.create') }}">Create Employee</a>
    </div>
<table class="table table-striped table-inverse table-responsive">
    <thead class="thead-inverse">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($employees as $key=> $employee)
            <tr>
                <td>{{ ++$key }}</td>
                <td><img width="100" height="100" src="{{ $employee->image }}" alt="">{{ $employee->name }}</td>
                <td>{{ $employee->address }}</td>
                <td><a class="btn btn-primary" href="{{ route('emp.edit',['id'=>$employee->id]) }}">Edit</a><a class="btn btn-danger" href="{{ route('emp.delete',['id'=>$employee->id]) }}">Delete</a></td>
            </tr>
            @endforeach


        </tbody>
</table>
</div>

@endsection
