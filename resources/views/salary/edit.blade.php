@extends('layouts.master')

@section('title')

{{ 'WDDB17 - Jameel Haider' }}
@endsection

@section('jameel')
<div class="container">

   <form action="{{ route('salary.store',['id'=>$id]) }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="amount">Amount</label>
        <input required type="number" name="amount" id="amount" class="form-control" placeholder="">
    </div>
    <div class="form-group">
        <label for="date">Date</label>
        <input type="date" required name="date" id="date" class="form-control" placeholder="">
    </div>

      <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Save">
      </div>
   </form>
</div>

@endsection
