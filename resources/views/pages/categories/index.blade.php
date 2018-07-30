@extends('laracrud.layouts.app')
@section('breadcrumb')
<li class="breadcrumb-item">
    categories
</li>
@endsection

@section('tools')
<a href="{{route('categories.create')}}">
    <span class="fa fa-plus"></span> categories
</a>
@endsection

@section('content')
@foreach($records as $record)
@include('cards.category')
@endforeach
{!! $records->render() !!}
@endSection