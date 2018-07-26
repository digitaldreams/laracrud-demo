@extends('layouts.app')
@section('breadcrumb')
<li class="breadcrumb-item">
    posts
</li>
@endsection

@section('tools')
<a href="{{route('posts.create')}}">
    <span class="fa fa-plus"></span> posts
</a>
@endsection

@section('content')
@foreach($records as $record)
@include('cards.post')
@endforeach
{!! $records->render() !!}
@endSection