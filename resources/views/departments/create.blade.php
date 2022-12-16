@extends('layouts.master')

@section('title')

{{ 'WDDB17 - Jameel Haider' }}
@endsection

@section('jameel')

<div class="container">
    <div class="bg-warning text-center h5">
        {{ isset($department) && $department->id !=null?"Update " :"Create " }} Department
    </div>
   <form action="{{ isset($department) && $department->id !=null ? route('departments.update',['id'=>$department->id]):route('departments.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="" value="{{ $department->name }}">
      </div>
      <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Save">
      </div>
   </form>
</div>

@endsection
