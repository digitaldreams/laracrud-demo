@extends('laracrud.layouts.app')
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
    <div class="row">
        @foreach($records as $record)
            <div class="col-sm-6">
                @include('cards.post')
            </div>
        @endforeach
    </div>

    {!! $records->render() !!}
@endSection