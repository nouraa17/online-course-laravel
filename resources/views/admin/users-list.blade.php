@extends('partial-components.admin.admin-layout')
@section('title','Users')

@section('spinner')
    @include('partial-components.layout.spinner')
@endsection

@section('content')
    @include('partial-components.admin.admin-users')
@endsection
