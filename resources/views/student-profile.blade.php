@extends('general-layout')
@section('title','Student Profile')

@section('spinner')
    @include('partial-components.layout.spinner')
@endsection

@section('content')
    @include('partial-components.partial-student-profile')
@endsection
