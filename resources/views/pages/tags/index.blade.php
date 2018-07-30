@extends('laracrud.layouts.app')
@section('breadcrumb')
<li class="breadcrumb-item">
    tags
</li>
@endsection

@section('tools')
<a href="{{route('tags.create')}}">
    <span class="fa fa-plus"></span> tags
</a>
@endsection

@section('content')
@foreach($records as $record)
@include('cards.tag')
@endforeach
{!! $records->render() !!}
@endSection