@extends('layouts.app')
@section('breadcrumb')
<li class="breadcrumb-item">
    <a href="{{route('posts.index')}}">posts</a>
</li>
<li class="breadcrumb-item">
    <a href="{{route('posts.show',$model->id)}}">{{$model->id}}</a>
</li>
<li class="breadcrumb-item">
    Edit
</li>
@endsection

@section('tools')
<a href="{{route('posts.create')}}">
    <span class="fa fa-plus"></span> posts
</a>
@endsection

@section('content')
<div class="row">
    <div class='col-md-12'>
        <div class='card'>
            <div class="card-body">
                @include('forms.post',[
                'route'=>route('posts.update',$model->id),
                'method'=>'PUT'
                ])
            </div>
        </div>
    </div>
</div>
@endSection