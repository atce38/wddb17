@extends('layouts.master')

@section('title')

{{ 'WDDB17 - Jameel Haider' }}
@endsection

@section('jameel')
<div class="container ">
    <div class="text-end">
        <a class="btn btn-info" href="{{ route('emp.create') }}">Create Employee</a>
    </div>

    <?php
    $header=[
        ['title'=>"Img",'attr'=>'image'],
        ['title'=>"Name",'attr'=>'name'],
        ['title'=>"Department",'attr'=>'department_name'],
        ['title'=>"Total Paid",'attr'=>'total_salary_paid'],
        ['title'=>"Address",'attr'=>'address'],
    ];

    ?>
    @include('components.admin.table',['data_array'=>$employees,'entity'=>'emp','attributes'=>$header])

</div>

@endsection
