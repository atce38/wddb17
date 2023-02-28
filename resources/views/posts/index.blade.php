@extends('layouts.master')

@section('title')

{{ 'WDDB17 - Jameel Haider' }}
@endsection

@section('jameel')
<div class="container ">
    <div class="text-end">
        <a class="btn btn-info" href="{{ route('posts.create') }}">Create Post</a>
    </div>

    <?php
    $header=[
        ['title'=>"User ID",'attr'=>'userId'],
        ['title'=>"ID",'attr'=>'id'],
        ['title'=>"Title",'attr'=>'title'],
        ['title'=>"Post Body",'attr'=>'body'],
    ];

    ?>
    @include('components.admin.table',['data_array'=>$posts,'entity'=>'posts','attributes'=>$header])

</div>

@endsection
