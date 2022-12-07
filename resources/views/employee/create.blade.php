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
