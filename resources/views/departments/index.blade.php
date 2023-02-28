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
    <?php
    $header=[
        ['title'=>"Name",'attr'=>'name'],
    ];

    ?>
@include('components.admin.table',['data_array'=>$departments,'entity'=>'departments','attributes'=>$header])
</div>

@endsection
