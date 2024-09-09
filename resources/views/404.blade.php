@extends('general-layout')
@section('title','404')

@section('spinner')
    @include('partial-components.layout.spinner')
@endsection

@section('content')
        @include('partial-components.partial-404')
@endsection
