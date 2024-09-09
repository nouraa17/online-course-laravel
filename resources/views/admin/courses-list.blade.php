@extends('partial-components.admin.admin-layout')
@section('title','Courses')

@section('spinner')
    @include('partial-components.layout.spinner')
@endsection

@section('content')
    @include('partial-components.admin.admin-courses')
@endsection
