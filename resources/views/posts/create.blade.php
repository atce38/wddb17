@extends('layouts.master')

@section('title')

{{ 'WDDB17 - Jameel Haider' }}
@endsection

@section('jameel')
<div class="container">
   <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control">
      </div>
      <div class="form-group">
        <label for="body">Post Body</label>
        <textarea name="body" class="form-control" placeholder="Enter Post Body" id="body" cols="30" rows="10"></textarea>
      </div>
      <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Save">
      </div>
   </form>
</div>

@endsection
