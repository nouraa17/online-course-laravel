@extends('general-layout')
@section('title','Category')

@section('spinner')
    @include('partial-components.layout.spinner')
@endsection

@section('content')
        @include('partial-components.category-courses-list')
@endsection
