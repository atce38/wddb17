@extends('layouts.master')

@section('title')

{{ 'WDDB17 - Jameel Haider' }}
@endsection

@section('jameel')
<div class="container">
    <img src="{{ $employee->image }}" alt="">
   <form action="{{ isset($employee) && $employee->id !=null ? route('emp.update',['id'=>$employee->id]):route('emp.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="" value="{{ $employee->name }}">
      </div>
      {{-- Loading All Department in Select Options --}}
      <div class="form-group">
        <label for="address">Select Department</label>
        <select class="form-control" name="dtp_id" id="dtp_id">

            @foreach ($departments as $department)
            <option {{ $department->id== $employee->dtp_id?'selected':'' }} value="{{ $department->id }}">
                {{ $department->name }}
            </option>
            @endforeach

        </select>
      </div>
      {{-- Above is Loading All Department in Select Options --}}
      <div class="form-group">
        <label for="address">Address</label>
        <input type="text" name="address" id="address" class="form-control" value="{{ $employee->address }}">
      </div>
      <div>
        <input type="file" name="img">

      </div>
      <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Save">
      </div>
   </form>
</div>

@endsection
